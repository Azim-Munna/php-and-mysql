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
			<li><a href="show_data.php">show student</a></li>
			<li class="active"><a href="db_student.php">add student</a></li>
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
		<?php
		if(isset($_SESSION["user"])){
			echo '<h2>hi ' . $_SESSION['user'].' how r u ?'.'</h2>';
		}

		?>
	</section>
	<footer>
		&copy electrical
	</footer>
</body>
</html>
