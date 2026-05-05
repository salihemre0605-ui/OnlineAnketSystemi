<?php
// 1. ADIM: Hataları engellemek için dosyaları doğru sırayla çağırıyoruz
require_once 'src/Question.php'; 
require_once 'src/MultipleChoice.php';
require_once 'src/TextQuestion.php';
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NanoSurvey - Online Anket Sistemi</title>
    <style>
        :root {
            --primary-color: #4a90e2;
            --secondary-color: #2ecc71;
            --bg-color: #f0f2f5;
            --card-bg: #ffffff;
            --text-dark: #2c3e50;
            --transition: all 0.3s ease;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--bg-color);
            color: var(--text-dark);
            display: flex;
            justify-content: center;
            align-items: flex-start;
            padding: 40px 20px;
            margin: 0;
        }

        .container {
            background: var(--card-bg);
            padding: 2.5rem;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 650px;
        }

        h1 {
            text-align: center;
            color: var(--primary-color);
            font-size: 2.2rem;
            margin-bottom: 2rem;
            letter-spacing: -1px;
            border-bottom: 3px solid var(--bg-color);
            padding-bottom: 15px;
        }

        .question-box {
            margin-bottom: 2rem;
            padding: 20px;
            border-radius: 12px;
            background: #fff;
            border: 1px solid #e1e8ed;
            transition: var(--transition);
        }

        .question-box:hover {
            border-color: var(--primary-color);
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }

        h3 {
            margin-top: 0;
            font-size: 1.2rem;
            color: var(--text-dark);
            margin-bottom: 15px;
        }

        .options-list {
            list-style: none;
            padding: 0;
        }

        .option-item {
            background: #f8f9fa;
            margin: 10px 0;
            padding: 14px 18px;
            border: 2px solid transparent;
            border-radius: 10px;
            transition: var(--transition);
            cursor: pointer;
            font-weight: 500;
        }

        .option-item:hover {
            background: #eef5ff;
            border-color: var(--primary-color);
            color: var(--primary-color);
        }

        .option-item.selected {
            background: var(--primary-color);
            color: white;
            border-color: var(--primary-color);
        }

        input[type="text"] {
            width: 100%;
            padding: 15px;
            border: 2px solid #e1e8ed;
            border-radius: 10px;
            outline: none;
            transition: var(--transition);
            font-size: 1rem;
        }

        input[type="text"]:focus {
            border-color: var(--primary-color);
            background: #fdfdfd;
            box-shadow: 0 0 8px rgba(74, 144, 226, 0.2);
        }

        .btn-submit {
            width: 100%;
            background: var(--secondary-color);
            color: white;
            border: none;
            padding: 18px;
            border-radius: 15px;
            font-size: 1.2rem;
            font-weight: 700;
            cursor: pointer;
            transition: var(--transition);
            box-shadow: 0 6px 20px rgba(46, 204, 113, 0.3);
            margin-top: 20px;
        }

        .btn-submit:hover {
            background: #27ae60;
            transform: scale(1.03);
        }

        .btn-submit:active {
            transform: scale(0.97);
        }
    </style>
</head>











<body>

<!-- NAVBAR (Açılır Menü Dahil) -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5">
  <div class="container">
    <a class="navbar-brand" href="home.php">📊 Anket Merkezi</a>
    <div class="collapse navbar-collapse" id="anaMenu">
      <ul class="navbar-nav me-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" data-bs-toggle="dropdown">📋 Anket Seçin</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="index.php">Öğrenci Anketi</a></li>
            <li><a class="dropdown-item" href="sporcu.php">Sporcu Anketi</a></li>
          </ul>
        </li>
        <li class="nav-item"><a class="nav-link" href="analiz.php">📈 Analizler</a></li>
      </ul>
    </div>
  </div>
</nav>





<div class="container">
    <h1>NanoSurvey</h1>
<form action="kaydet.php" method="POST">

    <?php



    // 2. ADIM: 10 Soruluk Dev Havuz
    $questions = [
        new MultipleChoice(1, "En çok hangi işletim sisteminde kod yazmayı seviyorsunuz?", ["Windows", "macOS", "Linux"]),
        new MultipleChoice(2, "Favori IDE / Editörünüz hangisi?", ["VS Code", "JetBrains", "Sublime Text", "Notepad++"]),
        new MultipleChoice(3, "Yapay zeka araçlarını ne sıklıkla kullanıyorsunuz?", ["Her zaman", "Ara sıra", "Sadece tıkandığımda", "Hiç"]),
        new MultipleChoice(4, "Hangi şirkette çalışmak istersiniz?", ["Aselsan", "Havelsan" ,"Roketsan", "Tusaş"]),
        new MultipleChoice(5, "Veritabanı tercihinizi hangisinden yana kullanırsınız?", ["MySQL", "PostgreSQL", "MongoDB", "SQLite"]),
        new MultipleChoice(6, "Bir projede en çok hangi aşama ilginizi çekiyor?", ["Tasarım (Frontend)", "Mantık (Backend)", "Veritabanı"]),
        new MultipleChoice(7, "Yazılımda en sevdiğiniz dil hangisidir?", ["Python", "JavaScript", "C#", "C++"]),
        new MultipleChoice(8, "Kod yazarken olmazsa olmaz içeceğiniz?", ["Kahve", "Çay", "Enerji İçeceği", "Su"]),
        new MultipleChoice(9, "Git uygulamasını ne sıklıkla kullanırsınız?", ["Her zaman", "Arada", "İşim Düşünce", "Hiç ."]),
        new MultipleChoice(10, "En sevdiğiniz BP bölümü dersi hangisidir?", ["Veri Tabanı","Yazılım Geliştirme", "İnternet Teknolojisi", "Bilişim Hukuku"])

        
    ];

    foreach ($questions as $q) {
        echo "<div class='question-box'>";
        echo "<h3>" . $q->getTitle() . "</h3>";
        if ($q instanceof MultipleChoice) {
            echo "<div class='options-list'>";
            foreach ($q->getOptions() as $option) {
                echo "<input type='radio' name='soru_" . $q->getId() . "' value='" . htmlspecialchars($option) . "' required>";
                echo "<span>" . $option . "</span>";
                echo "</label>";
            }
            echo "</div>";
        } else {
            echo "<input type='text' placeholder='Yanıtınızı buraya yazın...'>";
        }
        echo "</div>";
    }
    ?>
     <button class="btn-submit" onclick="alert('NanoMaster: Anketiniz başarıyla gönderildi!')">Anketi Tamamla</button>
       

   
 </form>
        </div>

<script>
    function selectOption(element) {
        // Aynı soru kutusundaki diğer seçimleri temizle
        let parent = element.parentElement;
        let options = parent.querySelectorAll('.option-item');
        options.forEach(opt => opt.classList.remove('selected'));
        
        // Tıklananı seçili yap
        element.classList.add('selected');
    }
</script>


</body>






</html>