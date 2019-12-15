<?php
include("auth.php");
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Каталог</title>
  <link rel="stylesheet" href="assets/css/style.css" />
  <style>
    body {
      background-image: url(../images/intro.jpg);
    }
  </style>
</head>

<body>
  <?php
  include("auth.php");
  require('db.php');
  ?>
  <header class="header">
    <div class="container">
      <div class="header_inner">
        <div class="header_logo">IU4-12B </div>

        <nav class="nav">
          <a class="nav_link" href="home.php">Домашняя</a>
          <a class="nav_link active" href="#">Каталог</a>
          <a class="nav_link" href="#">Отзывы и предложения</a>
          <?php
          $dbc = mysqli_connect('localhost', 'rozhkov', '1', 'register');
          $nick = $_SESSION['username'];
          if (mysqli_fetch_assoc(mysqli_query($dbc, "SELECT adm FROM users WHERE username='$nick';"))['adm'] == 1) {
            echo "<a class=\"nav_link\" href=\"main.php\">Добавление продукта</a>";
          }
          ?>
          <a class="nav_link" href="logout.php">Выход</a>
        </nav>

      </div>
    </div>
  </header>

  <div class="intro">
    <div class="container">
      <div class="intro_inner">
        <h2 class="intro_suptitle">Каталог</h2>
      </div>
    </div>
  </div>
  <div class="content">
    <div class="catalog">
      <div class="razdel">
        <section class="section">
          <div class="container">
            <div class="section_header">
              <h3 class="section_suptitle">Мы продаем</h3>
              <h2 class="section_title">Футболки</h2>
            </div>
        </section>
        <div class="product_main">
          <div class="product">
            <h2><a class="product_link" href="#">футболка 1</a></h2>
            <div class="ptoduct_img"><a href="#"><img src="assets/images/catalog/f1.jpg" width="220" height="250" alt="фото"></a></div>
            <p class="price">1234 <span>руб</span><a href="#"><img src="assets/images/catalog/view.jpg" width="70" height="30" alt="просмотр"></a></p>
          </div>
          <p class="bot_dot"></p>
        </div>
        <div class="product_main">
          <div class="product">
            <h2><a class="product_link" href="#">футболка 1</a></h2>
            <div class="ptoduct_img"><a href="#"><img src="assets/images/catalog/f1.jpg" width="220" height="250" alt="фото"></a></div>
            <p class="price">1234 <span>руб</span><a href="#"><img src="assets/images/catalog/view.jpg" width="70" height="30" alt="просмотр"></a></p>
          </div>
          <p class="bot_dot"></p>
        </div>
        <div class="product_main">
          <div class="product">
            <h2><a class="product_link" href="#">футболка 1</a></h2>
            <div class="ptoduct_img"><a href="#"><img src="assets/images/catalog/f1.jpg" width="220" height="250" alt="фото"></a></div>
            <p class="price">1234 <span>руб</span><a href="#"><img src="assets/images/catalog/view.jpg" width="70" height="30" alt="просмотр"></a></p>
          </div>
          <p class="bot_dot"></p>
        </div>
        <div class="product_main">
          <div class="product">
            <h2><a class="product_link" href="#">футболка 1</a></h2>
            <div class="ptoduct_img"><a href="#"><img src="assets/images/catalog/f1.jpg" width="220" height="250" alt="фото"></a></div>
            <p class="price">1234 <span>руб</span><a href="#"><img src="assets/images/catalog/view.jpg" width="70" height="30" alt="просмотр"></a></p>
          </div>
          <p class="bot_dot"></p>
        </div>
        <div class="product_main">
          <div class="product">
            <h2><a class="product_link" href="#">футболка 1</a></h2>
            <div class="ptoduct_img"><a href="#"><img src="assets/images/catalog/f1.jpg" width="220" height="250" alt="фото"></a></div>
            <p class="price">1234 <span>руб</span><a href="#"><img src="assets/images/catalog/view.jpg" width="70" height="30" alt="просмотр"></a></p>
          </div>
          <p class="bot_dot"></p>
        </div>
      </div>


      <div class="razdel">
        <section class="section">
          <div class="container">
            <div class="section_header">
              <h2 class="section_title">Толстовки</h2>
            </div>
        </section>
        <div class="product_main">
          <div class="product">
            <h2><a class="product_link" href="#">толстовка 1</a></h2>
            <div class="ptoduct_img"><a href="#"><img src="assets/images/catalog/t1.jpg" width="220" height="230" alt="фото"></a></div>
            <p class="price">2222 <span>руб</span><a href="#"><img src="assets/images/catalog/view.jpg" width="70" height="30" alt="просмотр"></a></p>
          </div>
          <p class="bot_dot"></p>
        </div>
        <div class="product_main">
          <div class="product">
            <h2><a class="product_link" href="#">толстовка 1</a></h2>
            <div class="ptoduct_img"><a href="#"><img src="assets/images/catalog/t1.jpg" width="220" height="230" alt="фото"></a></div>
            <p class="price">2222 <span>руб</span><a href="#"><img src="assets/images/catalog/view.jpg" width="70" height="30" alt="просмотр"></a></p>
          </div>
          <p class="bot_dot"></p>
        </div>
      </div>



    </div>

    <div class="razdel">
      <section class="section">
        <div class="container">
          <div class="section_header">
            <h2 class="section_title">Штаны</h2>
          </div>
      </section>
      <div class="product_main">
        <div class="product">
          <h2><a class="product_link" href="#">Штаны 1</a></h2>
          <div class="ptoduct_img"><a href="#"><img src="assets/images/catalog/s1.jpg" width="220" height="230" alt="фото"></a></div>
          <p class="price">3333 <span>руб</span><a href="#"><img src="assets/images/catalog/view.jpg" width="70" height="30" alt="просмотр"></a></p>
        </div>
        <p class="bot_dot"></p>
      </div>
      <div class="product_main">
        <div class="product">
          <h2><a class="product_link" href="#">Штаны 1</a></h2>
          <div class="ptoduct_img"><a href="#"><img src="assets/images/catalog/s1.jpg" width="220" height="230" alt="фото"></a></div>
          <p class="price">3333 <span>руб</span><a href="#"><img src="assets/images/catalog/view.jpg" width="70" height="30" alt="просмотр"></a></p>
        </div>
        <p class="bot_dot"></p>
      </div>
    </div>

  </div>
  </div>

  </div>
  </div>
  </div>
</body>

</html>
