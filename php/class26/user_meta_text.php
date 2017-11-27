
<form action="" class="form" method="get">
	<h4>user name <br></h4>
	<input type="text" name="user" placeholder="username">
	<h4>user passward <br></h4>
	<input type="password" name="pass" placeholder="passward">
	<h4>user email <br></h4>
	<input type="email" name="email" placeholder="your email">
	<h4>user mobile number <br></h4>
	<input type="text" name="number" placeholder="mobile number">
	<br>
	<input type="submit" name="submit" value="submit" >
</form>
<?php
	echo "<pre> get";
	print_r($_GET);
	echo "</pre>";
?>
<h2>hi <?php echo $_GET["user"] ?></h2>
<h2>hi <?php echo $_GET["number"] ?></h2>

<h4> hi <?php if(isset($_GET["email"])){ echo $_GET["email"];}?></h4>
<h4>hlw 2nd time <?php if(isset($_GET["number"])){echo $_GET["number"];} ?></h4>

<h2>get post </h2>
<form action="" class="form" method="post">
	<h4>user name <br></h4>
	<input type="text" name="user" placeholder="username">
	<h4>user passward <br></h4>
	<input type="password" name="pass" placeholder="passward">
	<h4>user email <br></h4>
	<input type="email" name="email" placeholder="your email">
	<h4>user mobile number <br></h4>
	<input type="text" name="number" placeholder="mobile number">
	<br>
	<input type="submit" name="submit" value="submit" >
</form>
<?php 
echo "<Pre> post";
 print_r($_POST);
 echo "</pre>";
?>
<h2>its my number form post <?php if(isset($_POST["number"])){echo $_POST["number"];} ?></h2>