<?php 
session_start();
if (!isset($_SESSION['name']) && !isset($_SESSION['password']))
 {
header('Location: glav.php');

 }
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>home</title>
</head>
<body>
	 <div class="hom_box">
	<h1>Добро пожаловать! <?php echo $_SESSION['name']?></h1>
	<div class="logout">
	<a href="logout.php">Выйти</a>
	</div>
	  </div>

</body>
</html>