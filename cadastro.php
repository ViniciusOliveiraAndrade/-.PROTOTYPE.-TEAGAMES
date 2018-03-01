<?php 

    
if (isset($_GET['signup'])) {
	if ($_GET['signup'] == 'empty') {
		echo '<script type="text/javascript">alert("O Preenchemento de todos os campos são obrigatórios!");</script>';
	}elseif ($_GET['signup'] == 'email') {
		echo '<script type="text/javascript">alert("E-mail invalido!");</script>';
	}elseif ($_GET['signup'] == 'usertaken') {
		echo '<script type="text/javascript">alert("Usuário já cadastrado!");</script>';
	}elseif ($_GET['signup'] == 'success') {
		echo '<script type="text/javascript">alert("Cadastro Completo!");</script>';
		header('Location: index.php');
		exit();
	}
}

 ?>

<?php 
	include_once 'header.php';
 ?>
<?php 
	include_once 'submenu.php';
 ?>

<form class="form-signin col-md-4 col-sm-7 mx-auto my-5" action="includes/signup.inc.php" method="POST">
	<h1 class="h3 mb-3 font-weight-normal text-center">Bem-vindo!</h1>
	<h1 class="h3 mb-3 font-weight-normal text-center">Casdastro</h1>
	
	<input class="form-control" type="text" name="nome" placeholder="Nome" required autofocus>
	<input class="form-control" type="text" name="email" placeholder="E-mail" required>
	<input class="form-control" type="password" name="senha" placeholder="Senha"  required>
	
	<button class="mt-5 btn btn-lg btn-primary btn-block" type="submit" name="submit">Cadastrar</button>
	
</form>

<?php 
	include_once "footer.html";
 ?>
