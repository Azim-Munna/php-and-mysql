<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>my first site with php</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header class="header"><h1>it-world</h1></header>

	<nav>
		<ul>
			<li class="active"><a href="home.php">home</a></li>
			<li><a href="#">about</a></li>
			<li><a href="#">contact</a></li>
			<?php 
				session_start();
				if(isset($_SESSION["user"])){
				echo '<li><a href="logout.php">logout (<small> '.$_SESSION["user"].' </small>)</a></li>';
			}else{
			echo '<li><a href="login.php">login</a></li>';
		}
			?>
			
			
		</ul>
	</nav>
	 <!-- (<small> '. $_SESSION['user'] .'</small>) -->