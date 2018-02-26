<?php 

if (isset($_POST['submit'])) {
	include_once "dbh.inc.php";
	$nome = mysqli_real_escape_string($conn, $_POST['nome']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$senha = mysqli_real_escape_string($conn, $_POST['senha']);

	//erro handlers
	//check for empty fields
	if (empty($nome) || empty($email) || empty($senha)) {
		header("Location: ../cadastro.php?signup=empty");
		exit();

	}else{
		//check if the email is valid
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			header("Location: ../cadastro.php?signup=email");
			exit();			
		}else{
			$sql = "SELECT * FROM users WHERE user_email='$email'";
			$result = mysqli_query($conn, $sql);
			$resultCheck = mysqli_num_rows($result);

			if ($resultCheck > 0) {
				header("Location: ../cadastro.php?signup=usertaken");
				exit();	
			}else{
				//hashing the pasword
				$hashedPassword = password_hash($senha, PASSWORD_DEFAULT);
				//INSERT USER INSIDE THE DATABASE
				$sql = "INSERT INTO users (user_nome, user_email, user_senha) VALUES ('$nome', '$email', '$hashedPassword');";
				mysqli_query($conn, $sql);
				header("Location: ../cadastro.php?signup=success");
				exit();
			}
		}

	}
}else{
	header("Location: ../cadastro.php");
	exit();
}
?>