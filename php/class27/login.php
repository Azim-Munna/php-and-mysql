<?php
session_start();
echo "<pre>";
print_r($_POST);
echo "</pre>";
if(isset($_POST["login"])){
	$correntuser= "azim";
	$user= $_POST["user"];
	if($user==$correntuser){
		$_SESSION["user"] = $user;	
	}else{
		$massage="<h2 style='color:red'>enter cureent ueser name </h2>";
	}
}
if(isset($_SESSION["user"])){
	header('Location:home.php');
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
		<form action="#" method="post">
			
		<table>
			<tr>
				<td>user</td>
				<td><input type="text" name="user"></td>
			</tr>
			<tr>
				<td><input type="submit" name="login" value="Log In"></td>
				<td></td>
			</tr>
		</table>
	
		</form>
		<div>
			<?php
			if(isset($massage)){
				echo $massage;
			}
			?>
		</div>
	</section>
	<footer>
		&copy; it-world.com
	</footer>
</body>
</html>