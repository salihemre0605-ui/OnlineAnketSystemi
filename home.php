<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NanoSurvey | Hoş Geldiniz</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); height: 100vh; color: white; }
        .hero-section { padding-top: 100px; text-align: center; }
        .anket-kart { 
            background: rgba(255, 255, 255, 0.1); 
            backdrop-filter: blur(10px); 
            border: 1px solid rgba(255,255,255,0.2);
            border-radius: 20px;
            padding: 30px;
            transition: 0.3s;
            cursor: pointer;
            text-decoration: none;
            color: white;
            display: block;
        }
        .anket-kart:hover { background: rgba(255, 255, 255, 0.2); transform: translateY(-10px); color: white; }
        .navbar { background: rgba(0,0,0,0.2) !important; backdrop-filter: blur(5px); }
    </style>
</head>
<body>

<!-- NAVBAR (Hocanın İstediği Dropdown Menü) -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
  <div class="container">
    <a class="navbar-brand fw-bold" href="#">📊 NanoSurvey</a>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white fw-bold" href="#" data-bs-toggle="dropdown">Hızlı Menü</a>
          <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item" href="ogrenci_anketi.php">👨‍🎓 Öğrenci Anketi</a></li>
            <li><a class="dropdown-item" href="sporcu.php">🏋️ Sporcu Anketi</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="analiz.php">📈 Sonuç Analizi</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container hero-section">
    <h1 class="display-3 fw-bold mb-3">NanoSurvey Veri Analiz Sistemi</h1>
    <p class="lead mb-5">Lütfen katılmak istediğiniz anketi aşağıdan seçiniz.</p>

    <div class="row justify-content-center g-4">
        <!-- Öğrenci Anketi Kartı -->
        <div class="col-md-5">
            <a href="index.php" class="anket-kart">
                <div class="display-4 mb-3">👨‍🎓</div>
                <h3>Öğrenci  Anketi</h3>
                
            </a>
        </div>
        <!-- Sporcu Anketi Kartı -->
        <div class="col-md-5">
            <a href="sporcu.php" class="anket-kart">
                <div class="display-4 mb-3">🏋️</div>
                <h3>Sporcu  Anketi</h3>
                
            </a>
        </div>
    </div>
    
    <div class="mt-5 opacity-75">
        <small>Ostim Teknik Üniversitesi | Bilgisayar Programcılığı 2025-2026</small>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>