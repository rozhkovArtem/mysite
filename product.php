<?php
include("auth.php");
$id=$_GET['id'];
?>

<!DOCTYPE html>
<html>
<head>
  <title>Товар</title>
  
  <link rel="stylesheet" href="assets/css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Montserrat:400,700&display=swap&subset=cyrillic-ext" rel="stylesheet">

</head>
<body>

<header class="header">
    <div class="container">
      <div class="header_inner">
        <div class="header_logo">IU4-12B </div>

        <nav class="nav">
          <a class="nav_link" href="home.php">Домашняя</a>
          <a class="nav_link" href="catalog.php">Каталог</a>
          
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
        <h2 class="intro_suptitle">Товар</h2>
        <h1 class="intro_title">
        <?php
          $sql = "SELECT * FROM products WHERE id='$id';";
         $name = mysqli_fetch_assoc(mysqli_query($dbc, $sql))['name'];
         $pricetag = mysqli_fetch_assoc(mysqli_query($dbc, $sql))['pricetag'];
         $descr = mysqli_fetch_assoc(mysqli_query($dbc, $sql))['descr'];
         $img = mysqli_fetch_assoc(mysqli_query($dbc, $sql))['link'];
         echo $name;
        ?>
        </h1>
      </div>
    </div>
  </div>

  <section class="section">
    <div class="container">

      <div class="section_header">
        <h3 class="section_suptitle">Описание</h3>
        <h2 class="section_title">Товара:</h2>
        <div class="section_text">
          <p>
            <?php echo $descr; ?>
          </p>
        </div>
      </div>

      <div class="about" style="justify-content: center">
        <div class="about_item">
          <div class="about_img">
            <img src="<?php echo $img; ?>" width="380" height="250" alt="1">
          </div>
          <div class="about_text">Цена: <?php echo $pricetag; ?> руб.</div>
        </div>
       
       
      </div>

    </div>
  </section>

  

</body>
</html>
