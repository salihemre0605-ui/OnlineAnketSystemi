<?php
require_once 'src/Database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $database = new Database();
    $db = $database->getConnection();

    foreach ($_POST as $key => $value) {
        // Soru ID'sini 'soru_1' gibi isimlerden ayıklıyoruz
        $soru_id = str_replace('soru_', '', $key);
        $cevap = $value;

        $query = "INSERT INTO cevaplar (soru_id, cevap_metni) VALUES (:soru_id, :cevap)";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':soru_id', $soru_id);
        $stmt->bindParam(':cevap', $cevap);
        $stmt->execute();
    }

    echo "<h1>Tebrikler! Cevaplarınız başarıyla kaydedildi.</h1>";
    echo "<a href='index.php'>Anasayfaya Dön</a>";
}
?>