<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NanoSurvey | Ana Sayfa</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts: Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    
    <style>
        body { 
            background-color: #f4f7f9; 
            font-family: 'Inter', sans-serif;
            color: #2d3436;
        }

        /* Hero: Lacivert ve ağırbaşlı bir ton */
        .hero-banner { 
            background: #0f172a; 
            padding: 100px 0 60px 0;
            color: #f8fafc;
            border-bottom: 4px solid #3b82f6;
        }

        /* Kartlar: Modern ve sade */
        .anket-secici { 
            background: #ffffff; 
            border: 1px solid #e2e8f0;
            border-radius: 16px;
            padding: 45px 25px;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            text-decoration: none !important;
            color: #1e293b !important;
            display: block;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }

        .anket-secici:hover { 
            transform: translateY(-10px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
            border-color: #3b82f6;
        }

        .emoji-icon {
            font-size: 3.5rem;
            margin-bottom: 20px;
            display: block;
        }

        .navbar { background: #0f172a !important; border-bottom: 1px solid rgba(255,255,255,0.1); }

        /* "Bize Yardımcı Olun" Bölümü */
        .feedback-section {
            background: #ffffff;
            border-top: 1px solid #e2e8f0;
            padding: 80px 0;
            margin-top: 100px;
        }
        
        .feedback-card {
            background: #f8fafc;
            border-radius: 12px;
            padding: 30px;
            border: 1px dashed #cbd5e1;
        }
    </style>
</head>
<body>

<!-- ÜST MENÜ (Navbar) -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
  <div class="container">
    <a class="navbar-brand fw-bold" href="home.php">📊 NanoSurvey</a>
    <div class="collapse navbar-collapse" id="nanoNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white fw-bold" href="#" data-bs-toggle="dropdown">Hızlı Menü</a>
          <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item" href="index.php">Öğrenci Anketi</a></li>
            <li><a class="dropdown-item" href="sporcu.php">Sporcu Anketi</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="analiz.php">Analiz Paneli</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- KARŞILAMA ALANI -->
<section class="hero-banner text-center">
    <div class="container">
        <h1 class="display-5 fw-bold mb-3">NanoSurvey Veri Portalı</h1>
        <p class="lead opacity-75">Geleceğin teknolojilerini ve alışkanlıklarını birlikte analiz ediyoruz.</p>
    </div>
</section>

<!-- SEÇENEKLER -->
<div class="container" style="margin-top: -40px;">
    <div class="row justify-content-center g-4 text-center">
        <div class="col-md-5 col-lg-4">
            <a href="index.php" class="anket-secici">
                <span class="emoji-icon">🎓</span>
                <h4 class="fw-bold">Öğrenci Anketi</h4>
                <p class="text-muted small">Teknoloji tercihlerini ve beklentilerini paylaştığın bölüm.</p>
                <div class="btn btn-primary w-100 mt-3 rounded-pill">Başla</div>
            </a>
        </div>
        <div class="col-md-5 col-lg-4">
            <a href="sporcu.php" class="anket-secici">
                <span class="emoji-icon">💪</span>
                <h4 class="fw-bold">Sporcu Anketi</h4>
                <p class="text-muted small">Yaşam kalitesi ve spor alışkanlıklarını analiz ettiğimiz bölüm.</p>
                <div class="btn btn-primary w-100 mt-3 rounded-pill">Başla</div>
            </a>
        </div>
    </div>
</div>

<!-- YARDIMCI OLUN KISMI -->
<section class="feedback-section text-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="feedback-card shadow-sm">
                    <h5 class="fw-bold mb-3">🛠️ NanoSurvey'i Geliştirmemize Yardımcı Olun</h5>
                    <p class="text-muted">
                        Bu sistem hala gelişim aşamasındadır. Kullanım sırasında yaşadığınız teknik sorunları veya 
                        "şöyle olsa daha iyi olur" dediğiniz fikirleri bizimle paylaşarak projemize destek olabilirsiniz.
                    </p>
                    <p class="small text-primary fw-bold mb-0">İletişim: Ostim Teknik Üniversitesi Proje Ekibi</p>
                </div>
                <div class="mt-5 text-muted x-small">
                    © 2026 NanoSurvey | Bilgisayar Programcılığı Bölümü
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>