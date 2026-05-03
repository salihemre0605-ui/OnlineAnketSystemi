<?php
// Hata raporlamayı aç
error_reporting(E_ALL);

ini_set('display_errors', 1);

require_once 'src/Database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $database = new Database();
    $db = $database->getConnection();

    if (!$db) {
        die("Veritabanı bağlantısı kurulamadı!");
    }

    $basarili = 0;
    foreach ($_POST as $key => $value) {
        if (strpos($key, 'soru_') !== false) {
            $soru_id = str_replace('soru_', '', $key);
            $cevap = $value;

            $query = "INSERT INTO cevaplar (soru_id, cevap_metni) VALUES (:soru_id, :cevap)";
            $stmt = $db->prepare($query);
            $stmt->bindParam(':soru_id', $soru_id);
            $stmt->bindParam(':cevap', $cevap);
            
            if($stmt->execute()) {
                $basarili++;
            } else {
                
            }
        }
    }

    if ($basarili > 0) {
        echo "<h1>$basarili adet cevap başarıyla kaydedildi!</h1>";
        echo "<a href='sonuclar.php'>Sonuçları Gör</a>";
    } else {
        echo "<h1>Hiç veri kaydedilemedi. Form verileri gelmemiş olabilir.</h1>";
        echo "<a href='index.php'>Geri Dön</a>";
    }
} else {
    echo "Bu sayfaya doğrudan erişemezsin kirve!";
}
?>