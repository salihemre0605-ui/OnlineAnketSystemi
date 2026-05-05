<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Sporcu Performans Anketi</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: #f8f9fa; font-family: 'Segoe UI', Tahoma, sans-serif; }
        .anket-card { border: none; border-radius: 15px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); transition: 0.3s; margin-bottom: 20px; }
        .anket-card:hover { transform: translateY(-5px); box-shadow: 0 8px 25px rgba(0,0,0,0.1); }
        .soru-baslik { color: #0d6efd; font-weight: bold; margin-bottom: 15px; }
        .btn-gonder { padding: 15px; font-weight: bold; border-radius: 10px; font-size: 18px; }
        .label-check { cursor: pointer; padding: 8px; display: block; border-radius: 5px; }
        .label-check:hover { background: #e9ecef; }
    </style>
</head>
<body>



<div class="container pb-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="text-center mb-5">🏆 Sporcu Performans & Alışkanlık Anketi</h1>
            
            <form action="kaydet.php" method="POST">

                <!-- SORU  -->
                <div class="card anket-card p-4">
                    <p class="soru-baslik">11. Haftada kaç gün aktif antrenman yapıyorsunuz?</p>
                    <label class="label-check"><input type="radio" name="soru5" value="1-2 Gün" required> 1-2 Gün</label>
                    <label class="label-check"><input type="radio" name="soru5" value="3-4 Gün"> 3-4 Gün</label>
                    <label class="label-check"><input type="radio" name="soru5" value="5+ Gün"> 5 ve üzeri</label>
                </div>

                <!-- SORU  -->
                <div class="card anket-card p-4">
                    <p class="soru-baslik">12. Ana spor dalınız hangisidir?</p>
                    <label class="label-check"><input type="radio" name="soru6" value="Futbol" required> Futbol / Basketbol</label>
                    <label class="label-check"><input type="radio" name="soru6" value="Fitness"> Fitness / Vücut Geliştirme</label>
                    <label class="label-check"><input type="radio" name="soru6" value="Yüzme"> Yüzme / Atletizm</label>
                </div>

                <!-- SORU  -->
                <div class="card anket-card p-4">
                    <p class="soru-baslik">13. Gıda takviyesi (Supplement) kullanıyor musunuz?</p>
                    <label class="label-check"><input type="radio" name="soru7" value="Evet" required> Düzenli Kullanıyorum</label>
                    <label class="label-check"><input type="radio" name="soru7" value="Bazen"> Ara Sıra Kullanıyorum</label>
                    <label class="label-check"><input type="radio" name="soru7" value="Hayır"> Hiç Kullanmıyorum</label>
                </div>

                <!-- SORU  -->
                <div class="card anket-card p-4">
                    <p class="soru-baslik">14. Günlük su tüketim miktarınız nedir?</p>
                    <label class="label-check"><input type="radio" name="soru8" value="1-2 Litre" required> 1-2 Litre</label>
                    <label class="label-check"><input type="radio" name="soru8" value="2-4 Litre"> 2-4 Litre</label>
                    <label class="label-check"><input type="radio" name="soru8" value="4+ Litre"> 4 Litre ve üzeri</label>
                </div>

                <!-- SORU  -->
                <div class="card anket-card p-4">
                    <p class="soru-baslik">15. Antrenman yapmak için hangi saat dilimini tercih edersiniz?</p>
                    <label class="label-check"><input type="radio" name="soru9" value="Sabah" required> Sabah (Erken saatler)</label>
                    <label class="label-check"><input type="radio" name="soru9" value="Öğle"> Öğle / İkindi</label>
                    <label class="label-check"><input type="radio" name="soru9" value="Akşam"> Akşam / Gece</label>
                </div>

                <!-- SORU  -->
                <div class="card anket-card p-4">
                    <p class="soru-baslik">16. Günlük ortalama uyku süreniz ne kadar?</p>
                    <label class="label-check"><input type="radio" name="soru10" value="6 saat altı" required> 6 saatten az</label>
                    <label class="label-check"><input type="radio" name="soru10" value="7-8 saat"> 7-8 saat (İdeal)</label>
                    <label class="label-check"><input type="radio" name="soru10" value="9+ saat"> 9 saatten fazla</label>
                </div>

                <!-- SORU  -->
                <div class="card anket-card p-4">
                    <p class="soru-baslik">17. Spor yaparken profesyonel bir antrenör desteği alıyor musunuz?</p>
                    <label class="label-check"><input type="radio" name="soru11" value="Evet" required> Evet, profesyonel destek alıyorum</label>
                    <label class="label-check"><input type="radio" name="soru11" value="Kısmen"> Sadece program alıyorum</label>
                    <label class="label-check"><input type="radio" name="soru11" value="Hayır"> Hayır, kendim çalışıyorum</label>
                </div>

                <!-- SORU  -->
                <div class="card anket-card p-4">
                    <p class="soru-baslik">18. Antrenman öncesi ısınma hareketlerine ne kadar vakit ayırırsınız?</p>
                    <label class="label-check"><input type="radio" name="soru12" value="Hiç" required> Hiç ayırmam</label>
                    <label class="label-check"><input type="radio" name="soru12" value="5-10 dk"> 5-10 Dakika</label>
                    <label class="label-check"><input type="radio" name="soru12" value="15+ dk"> 15 Dakika ve üzeri</label>
                </div>

                <!-- SORU  -->
                <div class="card anket-card p-4">
                    <p class="soru-baslik">19. Beslenme programınızı (makro-mikro) takip ediyor musunuz?</p>
                    <label class="label-check"><input type="radio" name="soru13" value="Sıkı takip" required> Evet, kalori takibi yapıyorum</label>
                    <label class="label-check"><input type="radio" name="soru13" value="Kısmen"> Genel olarak dikkat ediyorum</label>
                    <label class="label-check"><input type="radio" name="soru13" value="Hayır"> Hayır, canım ne isterse yiyorum</label>
                </div>

                <!-- SORU  -->
                <div class="card anket-card p-4">
                    <p class="soru-baslik">20. Spor yapmaktaki temel amacınız nedir?</p>
                    <label class="label-check"><input type="radio" name="soru14" value="Kilo vermek" required> Kilo Vermek / Formda Kalmak</label>
                    <label class="label-check"><input type="radio" name="soru14" value="Kas kütlesi"> Kas Kütlesini Artırmak</label>
                    <label class="label-check"><input type="radio" name="soru14" value="Sağlık"> Genel Sağlık / Stres Atmak</label>
                </div>

                <button type="submit" class="btn btn-primary btn-gonder w-100 shadow">Anketi Tamamla ve Gönder</button>

            </form>
        </div>
    </div>
</div>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>