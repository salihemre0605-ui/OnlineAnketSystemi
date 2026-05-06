# 📊 NanoSurvey - Online Anket ve Veri Analiz Sistemi

NanoSurvey, kullanıcıların farklı kategorilerde (Öğrenci, Sporcu vb.) anketlere katılabildiği ve toplanan verilerin anlık olarak analiz edilip grafiklere dönüştürüldüğü dinamik bir web uygulamasıdır. 

Ostim Teknik Üniversitesi Bilgisayar Programcılığı (2025-2026) eğitimi kapsamında geliştirilmiştir.

## 🚀 Özellikler

* **Çoklu Anket Desteği:** Sistemde şu an aktif olarak "Öğrenci Anketi" ve "Sporcu Anketi" modülleri bulunmaktadır.
* **Dinamik Veri Kaydı:** Formdan gelen tüm veriler (alt tireli veya düz numaralı fark etmeksizin) otomatik olarak algılanıp veritabanına işlenir.
* **Anlık Analiz Paneli:** Ankete katılım sağlandığı anda, `analiz.php` üzerinden veriler pasta grafiklerine (pie chart) dönüşür.
* **Modern Kullanıcı Arayüzü:** Bootstrap 5 kullanılarak tamamen responsive (mobil uyumlu) ve kurumsal bir tasarım hazırlanmıştır.
* **Genişletilebilir Yapı:** Yeni sorular veya yeni anket sayfaları eklemek sisteme tam entegre çalışacak şekilde kodlanmıştır.

## 🛠️ Kullanılan Teknolojiler

* **Backend:** PHP 
* **Veritabanı:** MySQL
* **Frontend:** HTML5, CSS3, Bootstrap 5
* **Geliştirme Ortamı:** XAMPP (Apache & MySQL)

## ⚙️ Kurulum ve Çalıştırma

Projeyi kendi yerel sunucunuzda (localhost) çalıştırmak için şu adımları izleyin:

1. Bu depoyu klonlayın veya `.zip` olarak indirip XAMPP içerisindeki `htdocs` klasörüne çıkartın.
2. XAMPP Control Panel üzerinden **Apache** ve **MySQL** servislerini başlatın.
3. Tarayıcınızdan `http://localhost/phpmyadmin` adresine gidin ve yeni bir veritabanı oluşturun (örn: `anket_db`).
4. Proje klasörünüzdeki SQL dosyasını (varsa) içe aktarın (Import).
5. `src/Database.php` dosyasını açarak veritabanı bağlantı ayarlarını (kullanıcı adı, şifre, db adı) kendi sisteminize göre güncelleyin.
6. Tarayıcınızda `http://localhost/proje_klasor_adiniz/home.php` adresine giderek projeyi başlatın.

## 📁 Proje Yapısı

* `home.php` - Kullanıcı karşılama ve anket seçimi ana sayfası.
* `ogrenci_anketi.php` - Eğitim ve teknoloji alışkanlıklarına dair soruları içerir.
* `sporcu.php` - Spor ve beslenme alışkanlıklarına dair soruları içerir.
* `kaydet.php` - Gelen form verilerini ayıklayıp veritabanına işleyen çekirdek dosya.
* `analiz.php` - Toplanan cevapların oranlarını grafiksel olarak gösteren panel.
* `src/Database.php` - PDO kullanarak güvenli veritabanı bağlantısı sağlayan sınıf.



