<?php 
	session_start();
	if (isset($_SESSION['user_id'])){
		header("Location: index.php");
		exit();
	}

	if (isset($_GET['login'])) {
		if ($_GET['login'] == 'empty') {
			echo '<script type="text/javascript">alert("O Preenchemento de todos os campos são obrigatórios!");</script>';
		}elseif ($_GET['login'] == 'error') {
			echo '<script type="text/javascript">alert("E-mail ou Senha Invalido!");</script>';
		}
	}
?>


<?php 
	include_once 'header.php';
 ?>
<?php 
	include_once 'submenu.php';
 ?>

<form class="form-signin col-md-4 col-sm-7 mx-auto my-5" action="includes/login.inc.php" method="POST">
	<h1 class="h3 mb-3 font-weight-normal text-center">Bem-vindo!</h1>

	<input type="text" name="email" placeholder="E-mail" class="form-control" required autofocus>
	<input type="password" class="form-control" placeholder="Senha" name="senha" required>
	<button class="mt-5 btn btn-lg btn-primary btn-block" type="submit" name="submit">Login</button>
	<div class="mx-auto my-4 text-center ">
		<a href="cadastro.php">Cadastrar-se</a>
	</div>
</form>




 <?php 
	include_once 'footer.html';
 ?>