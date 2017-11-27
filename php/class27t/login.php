<?php
session_start();
echo "<pre>";
print_r($_GET);
echo "</pre>";

if(isset($_GET["log"])){
	$curentuser= "azim";
	$user = $_GET["user"];
	if($user==$curentuser){
		$_SESSION["user"] = $user;
	}else{
		$massage= "<h2 style='color:red;'>enter currect user name </h2>";
	}
	

}
if(isset($_SESSION["user"])){
	header("Location:home.php");
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>electrical</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<header class="header">
		<h1>electrical</h1>
	</header>
	<nav>
		<ul>
			<li class="active"><a href="#">home</a></li>
			<li ><a href="#">about</a></li>
			<li ><a href="#">work</a></li>
			<li ><a href="#">contact</a></li>
			<?php
			if(isset($_SESSION["user"])){
				echo '<li ><a href="logout.php">logout(<small>'. $_SESSION["user"].'</small>)</a></li>';
			}else{
				echo '<li ><a href="#">login.php</a></li>';
			}
			?>
			
			
			
		</ul>
	</nav>
	<section>
		<form action="#" method="get" accept-charset="utf-8">
			<table>
				<tr>
					<td><input type="text" name="user"></td>
					<td>user</td>
					
				</tr>
				<tr>
					<td><input type="submit" name="log" value="login"></td>
					
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
		&copy electrical
	</footer>
</body>
</html>
