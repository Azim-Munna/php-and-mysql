<?php
 $data = 50;
 if($data<33){
 	echo "F"; 
 }else if($data<60){
 	echo "B";
 }
 else{
 	echo "A+";
 }
$count= 1;
while($count<=20){
	echo "post number".$count."<br>";
	$count++;
}
echo "<h2>2nd time</h2>"."<br>";
$seccout= 1;

while($seccout<=20){

if($seccout%2==0){
	echo "secound post number jor".$seccout."<br>";
}else{
	echo "bejor post number ".$seccout."<br>";
}

$seccout++;
} 

echo "<h3>wile left right</h3>";
$countt=1;
while ($countt<=20) {
	if($countt%2==0){
		echo '<p style="text-align: right ; " > ';
		echo "whileloop jor post number".$countt."<br>";
		echo "</p>";
	}else{
		echo "<p style='text-align:left;'>";
		echo " whileloop bejor>> post number".$countt."<br>";
		echo "</p>";
	}
	$countt++;
}

echo "<h2 style='color:red;text-align:center'>forloop start</h2>";
for($postnumber=1; $postnumber<20; $postnumber++){
	echo "postnumber forloop ".$postnumber."<br>";
}
echo "<h2>jor bijor with for left right</h2>";
for($for_count=1; $for_count<10; $for_count++):
	if($for_count%2==0){
		echo "<p style='text-align:right'>";
		echo "jor for count".$for_count."<br>";
		echo "</p>";
	}else{
		echo "<p style='text-align:left'></p>";
		echo "bijor for count ".$for_count."<br>";
	}

endfor;
echo "<h2>for each </h2>";
$colors=array("red","green","blue","black","pink");
foreach ($colors as $color) {
	
	echo "foreach i love  ".$color. " color"."<br>";

	echo'[mp3 color="'.$color.'"]';
}
echo "<h2>do while</h2>";
$do_count=5;
do{
	echo "post number form do while ".$do_count."<br>";
	$do_count++;
}while($do_count<=6);

?>