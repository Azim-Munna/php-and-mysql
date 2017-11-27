<?php
	
	
	// mysql
	$connectsql= mysqli_connect('localhost','root','','student_data');
	
	if($connectsql){
		$query = "SELECT * FROM 2nd_data_student";
		if($queryok=mysqli_query($connectsql, $query)){
			echo "<pre>";
			$collectdata = mysqli_fetch_assoc($queryok);
			print_r($collectdata);

			echo "</pre>";
		}
	}else{
		echo "<h2>db connection failed</h2>";
		mysqli_connect_error();
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
		

			
			<table border="1" width="100%">
			
				<?php
				while ($collectdata = mysqli_fetch_assoc($queryok)) :
					
				
				?>
				<tr>
					<td><?php echo $collectdata['id']; ?></td>
					<td><?php echo $collectdata['Name']; ?></td>
					<td><?php echo $collectdata['Email']; ?></td>
					
				</tr>
				<?php
			endwhile;
				?>
			</table>
			
		

	</section>
	<footer>student.com</footer>
</body>
</html>