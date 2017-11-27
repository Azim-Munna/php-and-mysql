<?php
session_start();
session_unset($_SESSION["user"]);
if(!isset($_SESSION['user'])){
	header('Location: login.php');
}
?>
