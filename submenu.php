<div class="container-fluid card d-sm-none">
	<nav class="nav">
		<ul class="nav mx-auto text-center nav-justified">
			<li class="nav-intem active">
				<a class="nav-link" href="index.php">
					<i class="fa fa-home" style="font-size:36px;color:blue;"></i>
				</a>
			</li>

			<li class="nav-intem active">
				<a class="nav-link" href="categorias.php">
					<i class="fa fa-list-ul" style="font-size:36px;color:green;"></i>
				</a>
			</li>

			<?php 
				if (isset($_SESSION['user_id'])) {
					echo '
						<li class="nav-intem active">
							<a class="nav-link" href="estatisticas.php">
								<i class="fa fa-area-chart" style="font-size:36px;color:red;"></i>
							</a>
						</li>';
				}
			 ?>
			<li class="nav-intem active">
				<a class="nav-link" href="usuario.php">
					<i class="fa fa-user-circle-o" style="font-size:36px;color:purple;"></i>
				</a>
			</li>
		</ul>
	</nav>
</div>