<?php
	session_start();
if(!isset($_SESSION['user'])){
	header('Location: login.php');
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
		<?php if(isset($_SESSION['user'])){?>
		<h1>hi <?php echo $_SESSION['user'];?></h1>
		<?php }else{
			echo "<h3>content</h3>";
		} ?>
	</section>
	<footer>
		&copy electronics.com
	</footer>
</body>
</html>