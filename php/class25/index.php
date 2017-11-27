<?php
	echo "hi";
	echo "<br>";
	print "hello";
	echo "<h2>hi i am munna </h2>";
	echo '<h2 class=\"title\" >  I\'m developer </h2>';
	$name = "azim";
	$surname = "munna";

	echo $name.$surname;
	echo "<br>";
	echo $name." ".$surname;
	echo "<br>";
	echo $name."is".$surname;
	echo "<br>";
	echo "<br>";
	echo "<br>";
	// data type
 	// strings
 	$string = "string";
 	 // integer
 	$numberr = 10;
 	// float
 	$float = 10.15;
 	// Boolean
 	$boolean_false = false;
 	$boolean_true= true;
 	
 $color  = array("red", "green", "blue" );

echo $string." <br>";
echo $numberr." <br>";
echo $float." <br>";
echo $boolean_true." <br>";
echo $color[2]." <br>";
print_r($color);
 echo '<pre>';
 print_r($color);
 $color_chentex = array(
 	"red" => "rgb(255,0,0)",
 	"green" => "hi", 
 	"blue" => "rgb(0,0,255)"
 );
 echo "<pre>";
 print_r($color_chentex);
echo $color_chentex["red"]."<br>";
   $color_adding_array = array();
   $color_adding_array["white"] = "#ffff";
	print_r($color_adding_array); 
	


// 2nd time
	$secnd_time = array(
		"red"=>"rgb(255,0,0)",
		"white"=>"#fff",
		"blue"=>"rgb(0,255,0)"
); 
$secnd_time["green"] =" rgb(2666,0,0)";
print_r($secnd_time);


// >>>> oparator
$a=10;
$b= 5; 
$c= "azim";
echo $a+$b."<br>";
echo $a-$b."<br>";
echo $a/$b."<br>";
echo $a*$b."<br>";
echo $b-$a."<br>";
echo $b-$a.$c."<br>";
// constant
define("MYNAME","azim munna ");
echo MYNAME;
?>

