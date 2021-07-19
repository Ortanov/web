<?php 
 session_start();

if (isset($_SESSION['name']) && isset($_SESSION['password']))
 {header('Location: hom.php');}

if (isset($_POST['password']) and isset($_POST['name'])) {

$name = $_POST['name'];
$password = md5($_POST['password']);

$adres = mysqli_connect('localhost','root','root','login')
or die('Ошибка соединения ');
$box = "SELECT * FROM log WHERE name='$name' and pasvord='$password' ";
$result = mysqli_query($adres, $box) ;
$count = mysqli_num_rows($result);

 if($count == 1){
 	$_SESSION['name'] = $name;
 	$_SESSION['password'] = $password;
 }
  else{
  	echo " неверный логин или пароль";
  }

if (isset($_SESSION['name']) and isset($_SESSION['password'])) {
@header('Location: hom.php');

}
 }



?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>login</title>
</head>
<body>

	<div class="form">
				<h1 >Войти</h1>

		<form action="glav.php" method="post" >
			<p> Логин</p>
			<input type="text" name="name">
			<p> Пароль</p>
			<input type="password" name="password"><br/>
			<a href="user.php">Зарегистрироваться</a><br/>
			<button type="submit" name="submit"> Войти </button><br/>

		</form>


	</div>


</body>
</html>