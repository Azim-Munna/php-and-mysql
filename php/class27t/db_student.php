<?php
if(isset($_POST['add_student'])){
	$name= $_POST['name'];
	$email= $_POST['email'];

// ******mysql
$dv_connect = mysqli_connect('localhost','root','','db_azim_mysql');

if($dv_connect){
	$query= "INSERT INTO tbl_students (name,email) VALUES('$name','$email')";
if(mysqli_query($dv_connect,$query)){
	$massage="student added";
}
}else{
	echo "<h2 style='color:red'>database connection faild</h2>";
	mysqli_connect_error();
}

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
	<header><h1>student data</h1>

	</header>
<nav>
		<ul>
			<li class="active"><a href="home.php">home</a></li>
			<li><a href="#">about</a></li>
			<li><a href="#">contact</a></li>
			<li><a href="show_data.php">show student</a></li>
			<li class="active"><a href="db_student.php">add student</a></li>
			
		</ul>
	</nav>

	<section>
		<form action="#" method="post" >
			<fieldset>
				<legend>user register</legend>
			<table >
			<tr>
				<td>Name</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="email" name="email"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="add_student" value="Add student"></td>
			</tr>
			</table>
		
			</fieldset>
		</form>
		<h2 style="color:green"><?php
		if(isset($massage)){
			echo $massage;
		}?>
			
		</h2>
	</section>
	<footer>
		&copy student.com
	</footer>
</body>
</html>