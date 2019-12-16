<?php
include("auth.php");
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Каталог</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Montserrat:400,700&display=swap&subset=cyrillic-ext" rel="stylesheet">
  
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




        <?php
        $dbc = mysqli_connect('localhost', 'rozhkov', '1', 'register');
        $sql = "SELECT * FROM products WHERE stype='f'";
        $search_mysql = mysqli_query($dbc, $sql);
        while ($row = mysqli_fetch_array($search_mysql)) {

          $id = $row['id'];
          ?>

          <div class="product_main">
            <?php
              $sql = "SELECT * FROM products WHERE stype='f'";
              $picture = mysqli_query($dbc, $sql);
              $picture = mysqli_fetch_array($picture);
              $img = $picture['link'];
              ?>

            <div class="product">
              <h2><a class="product_link" href="product.php?id=<?php echo $id; ?>"><?php echo $row['name']; ?></a></h2>
              <div class="ptoduct_img"><a href="product.php?id=<?php echo $id; ?>"><img src="<?php echo $img; ?>" width="220" height="230" alt="фото"></a></div>
              <p class="price"><?php echo $row['pricetag']; ?> <span>руб</span><a href="product.php?id=<?php echo $id; ?>"><img src="assets/images/catalog/view.jpg" width="70" height="30" alt="просмотр"></a></p>
            </div>
            <p class="bot_dot"></p>
          </div>

        <?php } ?>

      </div>


      <div class="razdel">
        <section class="section">
          <div class="container">
            <div class="section_header">
              <h2 class="section_title">Толстовки</h2>
            </div>
        </section>

        <?php
        $dbc = mysqli_connect('localhost', 'rozhkov', '1', 'register');
        $sql = "SELECT * FROM products WHERE stype='t'";
        $search_mysql = mysqli_query($dbc, $sql);
        while ($row = mysqli_fetch_array($search_mysql)) {

          $id = $row['id'];
          ?>

          <div class="product_main">
            <?php
              $sql = "SELECT * FROM products WHERE stype='t'";
              $picture = mysqli_query($dbc, $sql);
              $picture = mysqli_fetch_array($picture);
              $img = $picture['link'];
              ?>

            <div class="product">
              <h2><a class="product_link" href="product.php?id=<?php echo $id; ?>"><?php echo $row['name']; ?></a></h2>
              <div class="ptoduct_img"><a href="product.php?id=<?php echo $id; ?>"><img src="<?php echo $img; ?>" width="220" height="230" alt="фото"></a></div>
              <p class="price"><?php echo $row['pricetag']; ?> <span>руб</span><a href="product.php?id=<?php echo $id; ?>"><img src="assets/images/catalog/view.jpg" width="70" height="30" alt="просмотр"></a></p>
            </div>
            <p class="bot_dot"></p>
          </div>

        <?php } ?>
      </div>



    </div>

    <div class="razdel">
      <section class="section">
        <div class="container">
          <div class="section_header">
            <h2 class="section_title">Штаны</h2>
          </div>
      </section>


      <?php
      $dbc = mysqli_connect('localhost', 'rozhkov', '1', 'register');
      $sql = "SELECT * FROM products WHERE stype='s'";
      $search_mysql = mysqli_query($dbc, $sql);
      while ($row = mysqli_fetch_array($search_mysql)) {

        $id = $row['id'];
        ?>

        <div class="product_main">
          <?php
            $sql = "SELECT * FROM products WHERE stype='s'";
            $picture = mysqli_query($dbc, $sql);
            $picture = mysqli_fetch_array($picture);
            $img = $picture['link'];
            ?>

          <div class="product">
            <h2><a class="product_link" href="product.php?id=<?php echo $id; ?>"><?php echo $row['name']; ?></a></h2>
            <div class="ptoduct_img"><a href="product.php?id=<?php echo $id; ?>"><img src="<?php echo $img; ?>" width="220" height="230" alt="фото"></a></div>
            <p class="price"><?php echo $row['pricetag']; ?> <span>руб</span><a href="product.php?id=<?php echo $id; ?>"><img src="assets/images/catalog/view.jpg" width="70" height="30" alt="просмотр"></a></p>
          </div>
          <p class="bot_dot"></p>
        </div>

      <?php } ?>





    </div>
  </div>

  </div>
  </div>
  </div>
</body>

</html>
