<?php
// Veritabanı sınıfımızı çağırıyoruz
require_once 'src/Database.php';

$database = new Database();
$db = $database->getConnection();

// Tüm cevapları veritabanından çekiyoruz
$query = "SELECT * FROM cevaplar ORDER BY id DESC";
$stmt = $db->prepare($query);
$stmt->execute();
$cevaplar = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Anket Sonuçları - SurveyMaster</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; background: #f0f2f5; padding: 50px; }
        .container { max-width: 900px; margin: auto; background: white; padding: 30px; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); }
        h1 { color: #4a90e2; text-align: center; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { padding: 15px; text-align: left; border-bottom: 1px solid #eee; }
        th { background: #4a90e2; color: white; }
        tr:hover { background: #f9f9f9; }
        .back-link { display: block; text-align: center; margin-top: 20px; text-decoration: none; color: #4a90e2; font-weight: bold; }
    </style>
</head>
<body>

<div class="container">
    <h1>Anket Yanıtları</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Soru No</th>
                <th>Verilen Cevap</th>
                <th>Tarih</th>
            </tr>
        </thead>
        <tbody>
            <?php if (count($cevaplar) > 0): ?>
                <?php foreach ($cevaplar as $satir): ?>
                    <tr>
                        <td><?= $satir['id'] ?></td>
                        <td>Soru <?= $satir['soru_id'] ?></td>
                        <td><?= htmlspecialchars($satir['cevap_metni']) ?></td>
                        <td><?= $satir['kayit_tarihi'] ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="4" style="text-align:center;">Henüz hiç cevap kaydedilmemiş, kirve.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
    <a href="index.php" class="back-link">← Ankete Geri Dön</a>
</div>

</body>
</html> 