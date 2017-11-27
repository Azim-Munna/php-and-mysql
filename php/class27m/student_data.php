<?php
	if(isset($_POST['add_student'])){
		$name= $_POST['name'];
		$email= $_POST['email'];
		
	
	// mysql
	$connectsql= mysqli_connect('localhost','root','','student_data');
	
	if($connectsql){
		$query = "INSERT INTO 2nd_data_student(name,email) VALUE('$name','$email')";
		if(mysqli_query($connectsql, $query)){
			$massage= "added the name =>".$name;
		}
	}else{
		echo "<h2>db connection failed</h2>";
		mysqli_connect_error();
	}
	
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>student.com</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<header><h1>studeent</h1></header>
	<nav>
		<ul>
			<li><a href="#">home</a></li>
			<li><a href="#">about</a></li>
			<li><a href="#">contact</a></li>
			<li><a href="student_data.php">add_data</a></li>
			<li><a href="show_data.php">show data</a></li>
		</ul>
	</nav>
	<section>
		<form action="#" method="post" accept-charset="utf-8">
			<fieldset>
				<legend>add student data</legend>
			
				<table border="" width="">
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
		<h2><?php if(isset($massage)){
			echo $massage;
		}?></h2>
	
	</section>
	<footer>student.com</footer>
</body>
</html>