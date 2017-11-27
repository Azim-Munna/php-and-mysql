<?php

	function page_title(){
		echo"itworld.com";
	};
	function content_f(){
		echo"content kakldjfkajlkadjflkajdlkfja;lkdj;lk.com";
	};
	function blog_info($amaricca ='title' ){
		$blog_info_data = array(
			"title" => "this is blog title",
			"url" => "http//:www.itworld.com",
			"description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis, numquam!",
		);
		echo $blog_info_data[$amaricca];
	};

	function jogkorbo($a=0,$b=0){
		echo $a+$b;
	};
	function onakitem_jog(){
		$items= array(5,1,4,5,6);
		foreach($items as $item){
			echo $item."<br>" ;
		}
	};
?>

<!-- 
ver
kiio
array 
function 
-->