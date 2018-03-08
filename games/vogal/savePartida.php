<?php 

if (isset($_GET['erros'])){
	$dbServerName = "localhost";
	$dbUserName = "root";
	$dbPassword = "";
	$dbName = "teagames";


	$conn = mysqli_connect($dbServerName, $dbUserName, $dbPassword, $dbName);

	$erros = mysqli_real_escape_string($conn, $_GET['erros']);
	$user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
	$sql = "INSERT INTO partidas (erros, user_id) VALUES ('$erros', '$user_id');";
	mysqli_query($conn, $sql);
	exit();

}else{
	exit();
}

 ?>