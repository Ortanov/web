<?php
  session_start();

$name =$_POST['name'];
$password = md5($_POST['password']);
$repeat_pas = md5($_POST['repeat_pas']);
$error='';


 if (isset($_POST['submit'])) {


$conect= mysqli_connect('localhost','root','root','login')
or die('Ошибка соединения ');

 	if ( $password===$repeat_pas && $name !== '' && $password !== '' && $repeat_pas !== '' ) {

$box= "INSERT INTO log (name,pasvord) 
VALUES ('$name','$password')";

$queri= mysqli_query($conect,$box);


$close=mysqli_close($conect);
require 'header.php';

 	}else{
$error='Пароли не совпадают';
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

		<form action="user.php" method="post" >
			<p> Имя</p>
			<input type="text" name="name"><p><?= $nameer?></p>
			<p> Пароль</p>
			<input type="password" name="password"><p><?= $passworder?></p><br/>
			<p> Повторите пароль</p>
			<input type="password" name="repeat_pas"><p><?= $repeater?></p><p class="error"><?= $error?></p><br/>
			<a href="glav.php">войти</a> <a href="#">  главаня страница</a><br/>
			<button type="submit" name="submit"> Войти </button><br/>

		</form>


	</div>


</body>
</html>