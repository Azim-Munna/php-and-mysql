<?php



// ******mysql
$dv_connect = mysqli_connect('localhost','root','','db_azim_mysql');

if($dv_connect){
	
	$query= "SELECT * FROM tbl_students";

if( $queryok = mysqli_query($dv_connect,$query)){
	$collectdata = mysqli_fetch_assoc($queryok);
	//ue can use also mysquli_array /assock
	echo "<Pre>";
	print_r($collectdata);
	echo "</Pre>";
}
}else{
	echo "<h2 style='color:red'>database connection faild</h2>";
	mysqli_connect_error();
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
		<table border="1" width="100%">
			<tr>
				<td>id</td>
				<td>student name</td>
				<td>email</td>
			</tr>
			<?php
			while ($collectdata = mysqli_fetch_assoc($queryok)) :
				# code...
			

			?>
			<tr>
				<td><?php echo $collectdata['id'];?></td>
				<td><?php echo $collectdata['name'];?></td>
				<td><?php echo $collectdata['email'];?></td>
				
			</tr>
			<?php
			endwhile;
			?>
		</table>
	</section>
	<footer>
		&copy student.com
	</footer>
</body>
</html>