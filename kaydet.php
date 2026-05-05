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
    
    // Formdan gelen tüm verileri döngüye sokuyoruz
    foreach ($_POST as $key => $value) {
        
        // İçinde "soru" kelimesi geçen inputları yakala (soru1, soru_2, soru5 hepsi uyar)
        if (strpos($key, 'soru') !== false) {
            
            // SİHİRLİ DOKUNUŞ: Sadece rakamları ayıkla (soru5'ten 5'i, soru_6'dan 6'yı alır)
            $soru_id = preg_replace('/[^0-9]/', '', $key);
            $cevap = $value;

            // Eğer boş değilse veritabanına yaz
            if (!empty($soru_id) && !empty($cevap)) {
                $query = "INSERT INTO cevaplar (soru_id, cevap_metni) VALUES (:soru_id, :cevap)";
                $stmt = $db->prepare($query);
                $stmt->bindParam(':soru_id', $soru_id);
                $stmt->bindParam(':cevap', $cevap);
                
                if($stmt->execute()) {
                    $basarili++;
                }
            }
        }
    }

    // İşlem bitince ekrana şık bir mesaj basalım
    echo "<div style='font-family: sans-serif; text-align: center; margin-top: 50px;'>";
    if ($basarili > 0) {
        echo "<h2 style='color: #198754;'>Harika! $basarili adet cevap başarıyla kaydedildi! 🚀</h2>";
        echo "<br><br>";
        echo "<a href='index.php' style='padding: 10px 20px; background: #0d6efd; color: white; text-decoration: none; border-radius: 5px; margin-right: 15px;'>Ana Sayfaya Dön</a>";
        echo "<a href='analiz.php' style='padding: 10px 20px; background: #198754; color: white; text-decoration: none; border-radius: 5px;'>Grafikleri İncele</a>";
    } else {
        echo "<h2 style='color: #dc3545;'>Hiç veri kaydedilemedi. Şıkları seçtiğinden emin ol cürüm.</h2>";
        echo "<br><br>";
        echo "<a href='index.php' style='padding: 10px 20px; background: #6c757d; color: white; text-decoration: none; border-radius: 5px;'>Geri Dön</a>";
    }
    echo "</div>";

} else {
    echo "Bu sayfaya doğrudan erişemezsin kirve!";
}
?>