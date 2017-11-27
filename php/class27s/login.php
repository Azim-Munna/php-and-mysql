<?php
session_start();
echo "<pre>";
print_r($_POST);
echo "</pre>";
if(isset($_POST["login"])){
	$currectuser="azim2562";
	$user=$_POST["user"];
	if($user==$currectuser){
		$_SESSION['user']=$user;
	}
	else{
		$massage="<h2 style='color:red'>incurrect user</h2>";
	}
	

}

if(isset($_SESSION['user'])){
	header('Location: home.php');
}
 


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>2nd web site with php</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<header><h1>Electronics</h1>

	</header>
<nav>
		<ul>
			<li class="active"><a href="home.php">home</a></li>
			<li><a href="#">about</a></li>
			<li><a href="#">contact</a></li>
			<?php 
				
				if(isset($_SESSION["user"])){
				echo '<li><a href="logout.php">logout (<small> '. $_SESSION['user'] .'</small>)</a></li>';
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
				
			</tr>
		</table>
	
		</form>
		<div>
			<?php
			if(isset($massage)){
					echo $massage;
			} ?>
		</div>
		<h2>user name >>>>azim2562</h2>
	</section>
	<footer>
		&copy electronics.com
	</footer>
</body>
</html>