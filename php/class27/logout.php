<?php

session_start();
session_unset($_SESSION["user"]);
if(!isset($_SESSION["user"])){
	header('Location:login.php');
}
?>
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
				
				if(isset($_SESSION["user"])){
				echo '<li><a href="logout.php">logout (<small> '.$_SESSION["user"].' </small>)</a></li>';
			}else{
			echo '<li><a href="login.php">login</a></li>';
		}
			?>
			
			
		</ul>
	</nav>
	<section>
		<h4>logout out now ! for login  <a href="login.php">click herer</a></h4>
	</section>
	<footer>
		&copy; it-world.com
	</footer>
</body>
</html>