<?php
// Oluşturduğumuz sınıfları dahil ediyoruz
require_once 'src/MultipleChoice.php';
require_once 'src/TextQuestion.php';

echo "<h1>StayFlow Anket Uygulaması - İlk Test</h1>";

// 1. Çoktan Seçmeli Soru Oluşturalım (Inheritance Testi)
$secenekler = ["PHP", "Python", "Java", "C++"];
$soru1 = new MultipleChoice(1, "En sevdiğiniz programlama dili nedir?", $secenekler);

echo "<h3>" . $soru1->getTitle() . "</h3>";
echo "<ul>";
foreach ($soru1->getOptions() as $secenek) {
    echo "<li>$secenek</li>";
}
echo "</ul>";

// 2. Yazılı Soru Oluşturalım
$soru2 = new TextQuestion(2, "Yazılım geliştirme hakkındaki düşünceleriniz?");
echo "<h3>" . $soru2->getTitle() . "</h3>";
echo "<input type='text' placeholder='Buraya yazınız...'>";
?>
