<!DOCTYPE html>
<html>

<head>
       <meta charset="utf-8">
       <title>Вход</title>
       <link rel="stylesheet" href="assets/css/style.css" />
</head>

<body>
<?php
require('db.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['username'])) {
// removes backslashes
$username = stripslashes($_REQUEST['username']);
//escapes special characters in a string
$username = mysqli_real_escape_string($con, $username);
$password = stripslashes($_REQUEST['password']);
$password = mysqli_real_escape_string($con, $password);
//Checking is user existing in the database or not
$query = "SELECT * FROM `users` WHERE username='$username' and password='" . md5($password) . "'";
$result = mysqli_query($con, $query) or die(mysql_error());
$rows = mysqli_num_rows($result);
if ($rows == 1) {
$_SESSION['username'] = $username;
// Redirect user to index.php
header("Location: catalog.php");
} else { ?>
       <header class="header">
  <div class="container">
        <div class="header_inner">
         <div class="header_logo">IU4-12B </div>
 
            <nav class="nav">
               <a class="nav_link" href="home.php">Домашняя</a>
               <a class="nav_link" href="#">Каталог</a>
               <a class="nav_link" href="#">Отзывы и предложения</a>
               <a class="nav_link" href="registration.php">Регистрация</a>
               <a class="nav_link active" href="login.php">Вход</a>
        </nav>
 
        </div>
   </div>
 </header>
           <div class="form">
           <div class="form_inner">
           <div class="form_text">
           <p>Логин/пароль не коррекиен <br>Попробуйте снова:</p>
           </div>
           <a class="btn" href='login.php'>Вход</a>
 
            </div> 
           </div>
      <?php  }
       } else {
              ?>
<header class="header">
 <div class="container">
       <div class="header_inner">
        <div class="header_logo">IU4-12B </div>

           <nav class="nav">
              <a class="nav_link" href="home.php">Домашняя</a>
              <a class="nav_link" href="#">Каталог</a>
              <a class="nav_link" href="#">Отзывы и предложения</a>
              <a class="nav_link" href="registration.php">Регистрация</a>
              <a class="nav_link active" href="login.php">Вход</a>
       </nav>

       </div>
  </div>
</header>
<div class="form">
       <div class="form_inner">
              <div class="form_header">
                     <h1>Вход</h1>
              </div>
         <form action="" method="post" name="login">
         <input class="input" type="text" name="username" placeholder="Логин" required />
         <input class="input" type="password" name="password" placeholder="Пароль" required />
         <input class="submit" name="submit" type="submit" value="Войти" />
         </form>
         <div class="form_text">
         <p>Вы ещё не зарегитрированы?</p>
        </div>
        <a class="btn" href='registration.php'>Зарегистрируйтесь здесь</a>
</div>
       <?php } ?>
</body>

</html>
