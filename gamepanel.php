<?php 
	session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<title>TEA Games | Best Games</title>
	<link rel="icon" href="img/Logo.png">
	<link rel="stylesheet" type="text/css" href="css/gamepenal.css">
	<link rel="stylesheet" media="screen and (max-width:768px)" type="text/css" href="css/mobilestyle.css"/>
	
</head>
<body>
	<div class="row bg-primary">
		<?php 
			include_once "menu.php";
		?>
	</div>


	<center>
		<img id="turn" src="img/rotatedevice.gif">
	</center>
	<div id="gameCanvas"></div>




<?php
	include_once "footer.html";
?>