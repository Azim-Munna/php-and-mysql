<form action="" class="form" method="post">
	
	<h4>user email <br></h4>
	<input type="email" name="email" placeholder="your email">

	<h4>subject <br></h4>
	<input type="text" name="subject" placeholder="subject">
	<h4>subject <br></h4>
	<textarea name="massage"></textarea>
	<br>
	<input type="submit" name="submit" value="submit" >
</form>
<?php
echo "<pre>";
print_r($_POST);
echo "</pre>";

$email = $post["email"];
$subject = $post["subject"];
$header = "form: ".$email;
$massage = $post["massage"];
 $complete = mail($email,$subject,$massage,$header);
 if($complete){
 	echo "<p style='color:green;'>magage send</p>";
 }else{
 	
 };
?>
<h1>masage from email <?php if(isset($_POST["massage"])){echo $_POST["massage"];}?></h1>