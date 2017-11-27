<?php
	session_start();
	echo "<pre>";
	$_SESSION["login"]= " munna";
	$_SESSION["name"]= " munna29";

	print_r($_SESSION);
	echo "</pre>";

?>