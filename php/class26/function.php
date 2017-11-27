<?php
echo "<h2 style='text-align:center;color:red'>php function </h2>";

function the_title(){
	echo "<h3>the tittle </h3>";
};
the_title();
 
 function sec_title(){
 	return "<h3> Lorem ipsum dolor sit.</h3>";
 };
 echo sec_title();
 include("functions.php");
  page_title();
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<title><?php page_title(); ?></title>
 	<link rel="stylesheet" href="">
 </head>
 <body>
 	<h1><?php page_title();?></h1>
 
 	<p><?php content_f();?></p>
 	<h2><?php blog_info('url'); ?></h2>
 	<h2><?php blog_info("description"); ?></h2>
 	<h2><?php blog_info('url'); ?></h2>
 	<h2><?php blog_info('title'); ?></h2>
 	<h2><?php blog_info(); echo " php"; ?></h2>
 	<h2><?php jogkorbo(50,60); ?></h2>
 	<h2><?php jogkorbo(20,60); ?></h2>
 	<h2><?php jogkorbo(10,60); ?></h2>
 	<h2><?php onakitem_jog(); ?></h2>

 </body>	
 </html>