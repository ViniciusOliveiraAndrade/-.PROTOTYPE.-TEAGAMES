<?php 

	if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<title>TEA Games | Best Games</title>
	<link rel="icon" href="img/Logo.png">

	<link rel="stylesheet" media="screen and (max-width:768px)" type="text/css" href="css/mobilestyle.css"/>
</head>
<body>
	<div class="row bg-primary">
		
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
				
				<button class="navbar-toggler active" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    	<span class="navbar-toggler-icon"></span>
			  	</button>
				<a class="navbar-brand text-center" href="index.php">TEA GAMES</a>
			 	
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						
						<li class="nav-item active">
							<a class="nav-link" href="index.php">Início<span class="sr-only">(current)</span></a>
						</li>

						<li class="nav-item active">
							<a class="nav-link" href="categorias.php" >Categorias<span class="sr-only">(current)</span></a>
						</li>

						

						<?php if (isset($_SESSION['user_id'])) {
							echo '

								<li class="nav-item active">
									<a class="nav-link" href="estatisticas.php" >Estatísticas<span class="sr-only">(current)</span></a>
								</li>
								
								<li class="nav-item active">
									<a class="nav-link" href="usuario.php" >Minha Conta<span class="sr-only">(current)</span></a>
								</li>
								
								<form  class="nav-item active bg-primary" action="includes/logout.inc.php" method="POST">
									<button class="nav-link bg-primary" style="background:none!important;border:none;cursor: pointer;" type="submit" name="submit">Logout</button>
								</form>
								';


						} else{

							echo '
								<li class="nav-item active">
									<a class="nav-link" href="login.php" >Login<span class="sr-only">(current)</span></a>
								</li>

								<li class="nav-item active">
									<a class="nav-link" href="cadastro.php" >Cadastrar-se<span class="sr-only">(current)</span></a>
								</li>
								';
						}

						?>

					</ul>
				</div>
		 	</nav>
		 </div>

	</div>