<?php 
	include 'db.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="\img\head-ico\proland.png" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="\style\header.css">
	<title>ProLand</title>
</head>
<body>
<header>
	<div class="topnav" id="myTopnav">
	  <a href="index.php" class="active">Pro-land</a>
	  <a href="about-us.php">О нас</a>
	  <a href="beautification.php">Благоустройство</a>
	  <a href="Civil.php">Общестроительные работы</a>
	  <a href="work.php">Наши работы</a>
	  <a href="contacts.php">Контакты</a>
	  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
		<img src="\img\burger.png" >
	  </a>
	</div>
</header>
<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>