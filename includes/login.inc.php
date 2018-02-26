<?php 

	session_start();

	if (isset($_POST['submit'])) {
		include 'dbh.inc.php';

		$email = mysqli_real_escape_string($conn,$_POST['email']);
		$senha = mysqli_real_escape_string($conn,$_POST['senha']);
		
		//erro hangler
		if (empty($email) || empty($senha) ) {


			header("Location: ../login.php?login=empty");
			exit();
		}else{
			$sql = "SELECT * FROM users WHERE user_email = '$email'";
			$result = mysqli_query($conn, $sql);
			$resultCheck = mysqli_num_rows($result);
			if ($resultCheck < 1) {
				header("Location: ../login.php?login=error");
				exit();			
			}else{

				if ($row = mysqli_fetch_assoc($result)) {
					//de-hasshing
					$hashedSenhaCheck = password_verify($senha, $row['user_senha']);
					if($hashedSenhaCheck == false){
						header("Location: ../login.php?login=error");
						exit();	
					}elseif ($hashedSenhaCheck == true) {
						//log in the user here
						$_SESSION['user_id'] = $row['user_id'];
						$_SESSION['user_email'] = $row['user_email'];
						header("Location: ../index.php");
						exit();	
					}
				}
			}
		}

	}else{
		header("Location: ../login.php?login=error");
		exit();
	}
 ?>