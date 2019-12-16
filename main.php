<?php
	session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Добавление продукта</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="assets/css/style.css" />
</head>
<body>
	<?php
	if(isSet($_SESSION['username'])){
		$dbc=mysqli_connect('localhost', 'rozhkov', '1', 'register');
		$nick=$_SESSION['username'];
		$q="SELECT adm FROM users WHERE username='$nick'";
		$marr=mysqli_fetch_assoc(mysqli_query($dbc,$q));
		if($marr['adm']!=1){
			echo "get outta here";
			mysqli_close($dbc);
			exit(4);
		}
	} else {
		echo "get outta here";
		mysqli_close($dbc);
		exit(4);
	}
	?>
	 <header class="header">
            <div class="container">
                   <div class="header_inner">
                          <div class="header_logo">IU4-12B </div>

                          <nav class="nav">
                                 <a class="nav_link" href="home.php">Домашняя</a>
                                 <a class="nav_link" href="catalog.php">Каталог</a>
                                 <a class="nav_link" href="#">Отзывы и предложения</a>
                                 <a class="nav_link active" href="login.php">Добавление продукта</a>
                          </nav>

                   </div>
            </div>
     </header>
	<div class="form">
	<div class="form_inner">
	<div class="form_header">
	<h6>Добавление продукта</h6>
    </div>
	<form method="post" enctype="multipart/form-data" >
		<input class="input" type="text" name="stype" value="<?php if(isSet($_POST['stype'])){echo $_POST['stype'];}?>" placeholder="тип">
		<input class="input" type="text" name="name" value="<?php if(isSet($_POST['name'])){echo $_POST['name'];}?>" placeholder="название">
		<textarea class="input" name="descr" placeholder="описание"></textarea>
		<input class="input" type="hidden" name="mnf" value="000" >
		<input class="input" type="text" name="tag" value="<?php if(isSet($_POST['tag'])){echo $_POST['tag'];}?>" placeholder="цена">
		<input class="input" type="file" name="img">
		<input class="input" type="hidden" name="doadd" value="1";>
		
		<input class="submit" type="submit" value="добавить">
	</form>
	</div>
	</div>
	<?php
	if(!isset($_POST['doadd'])){
		exit(5);
	}
	$stype=$_POST['stype'];
	$name=$_POST['name'];
	$mnf=$_POST['mnf'];
	$tag=$_POST['tag'];
	$descr=$_POST['descr'];
	move_uploaded_file($_FILES['img']['tmp_name'], "assets/images/catalog/".$_FILES['img']['name']);
	$way = "/var/www/html/mysite/assets/images/catalog/".$_FILES['img']['name'];
	$q="INSERT INTO products VALUES(DEFAULT,'$stype','$name','$mnf','$tag','$descr','$way',DEFAULT);";
	 copy($_FILES['img']['name'], "/var/www/html/mysite/assets/images/catalog/");
	mysqli_query($dbc,$q);
	
	?>
</body>
</html>



