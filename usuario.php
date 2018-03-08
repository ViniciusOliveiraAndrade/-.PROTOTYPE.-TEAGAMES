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
<div class="jumbotron text-center">
	<a href="https://goo.gl/forms/sQZZcs9GJgBDKglb2" class="btn bg-primary text-white">Questionário.</a>
</div>




 <?php 
 	include_once 'footer.html'; 
 ?>