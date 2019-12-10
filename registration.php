<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Регистрация</title>
<link rel="stylesheet" href="assets/css/style.css" />
</head>
<body>
<?php
require('db.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['username'])){
        // removes backslashes
 $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
 $username = mysqli_real_escape_string($con,$username);
 $email = stripslashes($_REQUEST['email']);
 $email = mysqli_real_escape_string($con,$email);
 $password = stripslashes($_REQUEST['password']);
 $password = mysqli_real_escape_string($con,$password);
 $trn_date = date("Y-m-d H:i:s");
        $query = "INSERT INTO `users` (`username`, `password`, `email`, `trn_date`, `adm`)
VALUES ('$username', '".md5($password)."', '$email', '$trn_date', '0')";
        $result = mysqli_query($con,$query);
        if($result){ ?>
        <header class="header">
            <div class="container">
                  <div class="header_inner">
                   <div class="header_logo">IU4-12B </div>
           
                      <nav class="nav">
                         <a class="nav_link" href="home.php">Домашняя</a>
                         <a class="nav_link" href="#">Каталог</a>
                         <a class="nav_link" href="#">Отзывы и предложения</a>
                         <a class="nav_link active" href="registration.php">Регистрация</a>
                         <a class="nav_link" href="login.php">Вход</a>
                  </nav>
           
                  </div>
             </div>
           </header>
           <div class="form">
           <div class="form_inner">
           <div class="form_text">
           <p>Вы успешно зарегистрировались. <br> Теперь выполните вход:</p>
           </div>
           <a class="btn" href='login.php'>Вход</a>

            </div> 
           </div>
      <?php  }
    }else{
?>
<header class="header">
 <div class="container">
       <div class="header_inner">
        <div class="header_logo">IU4-12B </div>

           <nav class="nav">
              <a class="nav_link" href="рщьуюзрз">Домашняя</a>
              <a class="nav_link" href="#">Каталог</a>
              <a class="nav_link" href="#">Отзывы и предложения</a>
              <a class="nav_link active" href="registration.php">Регистрация</a>
              <a class="nav_link" href="login.php">Вход</a>
       </nav>

       </div>
  </div>
</header>
<div class="form">
        <div class="form_inner">
        <div class="form_header_reg">
                     <h1>Регистрация</h1>
              </div>
<form name="registration" action="" method="post">
<input class="input" type="text" name="username" placeholder="Логин" required />
<input class="input" type="email" name="email" placeholder="Email" required />
<input class="input" type="password" name="password" placeholder="Пароль" required />
<input class="submit" type="submit" name="submit" value="Зарегистрироваться" />
</form>
</div>
</div>
<?php } ?>
</body>
</html>
