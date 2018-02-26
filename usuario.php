<?php 
	session_start();
	if (!isset($_SESSION['user_id'])) {
		header("Location: login.php");
		exit();
	}else{
		include_once 'header.php';
	}
 ?>
 <?php 
 	include_once 'submenu.php'; 
 ?>



 


 <?php 
 	include_once 'footer.html'; 
 ?>