<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once 'src/Database.php';
$database = new Database();
$db = $database->getConnection();

// 1. ADIM: Cevaplar tablosundaki benzersiz soru ID'lerini buluyoruz
$soruBulucu = $db->query("SELECT DISTINCT soru_id FROM cevaplar ORDER BY soru_id ASC");
$tumAnalizler = [];

while ($soruRow = $soruBulucu->fetch(PDO::FETCH_ASSOC)) {
    $s_id = $soruRow['soru_id'];
    
    // 2. ADIM: Her bir soru ID'si için verilen cevapları ve sayılarını sayıyoruz
    $analizSorgu = $db->prepare("SELECT cevap_metni, COUNT(*) as adet FROM cevaplar WHERE soru_id = :id GROUP BY cevap_metni");
    $analizSorgu->execute(['id' => $s_id]);
    $veriler = $analizSorgu->fetchAll(PDO::FETCH_ASSOC);
    
    // Verileri paketliyoruz
    $tumAnalizler[] = [
        'baslik' => "Soru " . $s_id, // Tablo olmadığı için başlığı böyle veriyoruz
        'etiketler' => array_column($veriler, 'cevap_metni'),
        'sayilar' => array_column($veriler, 'adet')
    ];
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Hızlı Analiz Paneli</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body { font-family: 'Segoe UI', sans-serif; background-color: #f0f2f5; padding: 20px; }
        .container { max-width: 800px; margin: auto; }
        .chart-card { background: white; border-radius: 12px; padding: 20px; margin-bottom: 25px; box-shadow: 0 4px 6px rgba(0,0,0,0.05); }
        h1 { text-align: center; color: #1a73e8; }
        h3 { border-left: 5px solid #1a73e8; padding-left: 10px; color: #444; }
    </style>
</head>
<body>

<div class="container">
    <h1>📊 Anket Veri Analizi</h1>

    <?php if (empty($tumAnalizler)): ?>
        <p style="text-align:center;">Henüz veritabanında hiç cevap yok cürüm.</p>
    <?php else: ?>
        <?php foreach ($tumAnalizler as $index => $analiz): ?>
            <div class="chart-card">
                <h3><?php echo $analiz['baslik']; ?> Analizi</h3>
                <div style="max-width: 400px; margin: auto;">
                    <canvas id="grafik_<?php echo $index; ?>"></canvas>
                </div>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</div>

<script>
    const veriler = <?php echo json_encode($tumAnalizler); ?>;

    veriler.forEach((item, i) => {
        const ctx = document.getElementById('grafik_' + i).getContext('2d');
        new Chart(ctx, {
            type: 'pie', // Pasta grafiği en tatlısı
            data: {
                labels: item.etiketler,
                datasets: [{
                    data: item.sayilar,
                    backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc', '#f6c23e', '#e74a3b', '#858796'],
                }]
            },
            options: {
                responsive: true,
                plugins: { legend: { position: 'bottom' } }
            }
        });
    });
</script>
</body>
</html>