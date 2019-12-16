<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="assets/css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Montserrat:400,700&display=swap&subset=cyrillic-ext" rel="stylesheet">
  <title>IU4-12B</title>
</head>

<body>

  <header class="header">
    <div class="container">
      <div class="header_inner">
        <div class="header_logo">IU4-12B </div>

        <nav class="nav">
          <a class="nav_link active" href="#">Домашняя</a>
          <a class="nav_link" href="catalog.php">Каталог</a>
          
      
          <?php
          session_start();
          if(isset($_SESSION["username"])){
        echo "<a class=\"nav_link\" href=\"logout.php\">Выход</a>";
          } else { echo "<a class=\"nav_link\" href=\"registration.php\">Регистрация</a>
          <a class=\"nav_link\" href=\"login.php\">Вход</a>";}
          ?>
        </nav>

      </div>
    </div>
  </header>

  <div class="intro">
    <div class="container">
      <div class="intro_inner">
        <h2 class="intro_suptitle">Интернет-магазин</h2>
        <h1 class="intro_title">Одежды IU4-12B</h1>

        <a class="btn" href="login.php">Войти</a>
      </div>
    </div>
  </div>
  <section class="section">
    <div class="container">

      <div class="section_header">
        <h3 class="section_suptitle">Что мы продаем</h3>
        <h2 class="section_title">Введение</h2>
        <div class="section_text">
          <p>Мы продаем наш продукт со времён Второй Мировой Войны... Наши клиенты оставляют только положительные отзывы, или они перестают существовать...</p>
        </div>
      </div>

      <div class="about">
        <div class="about_item">
          <div class="about_img">
            <img src="assets/images/about/1.jpg" width="380" height="250" alt="1">
          </div>
          <div class="about_text">Футболки</div>
        </div>
        <div class="about_item">
          <div class="about_img">
            <img src="assets/images/about/2.jpg" width="380" height="250" alt="2">
          </div>
          <div class="about_text">Толстовки</div>
        </div>
        <div class="about_item">
          <div class="about_img">
            <img src="assets/images/about/3.jpg" width="380" height="250" alt="3">
          </div>
          <div class="about_text">Штаны</div>
        </div>
      </div>

    </div>
  </section>

  <div class="statistics">
    <div class="container">
      <div class="stat">

        <div class="stat_item">
          <div class="stat_count">42</div>
          <div class="stat_text">потраченных нервов</div>
        </div>
        <div class="stat_item">
          <div class="stat_count">123</div>
          <div class="stat_text">попытки сделать что-то</div>
        </div>
        <div class="stat_item">
          <div class="stat_count">15</div>
          <div class="stat_text">тысяч недовольных клиентов</div>
        </div>
        <div class="stat_item">
          <div class="stat_count">99</div>
          <div class="stat_text">кружек кофе</div>
        </div>
        <div class="stat_item">
          <div class="stat_count">24</div>
          <div class="stat_text">участника</div>
        </div>

      </div>
    </div>
  </div>




</body>

</html>
