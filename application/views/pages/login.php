<div class="page-content minheight">
	<div class="container">
		<div class="bg-light">
			<?php 
				if (null !== $this->session->userdata("nome")) {
					redirect(base_url("/home"));
				}
				if($this->session->flashdata('danger')){
					echo "<div class='alert alert-danger text-dark '>Usuiario e/ou senha incorretos!</div>";
				}
			?>
		</div>
		<div class="jumbotron bg-gray">
			<h2 class="text-light display-4">Fazer Login:</h2>
			<hr class="my-4 bg-light">
			<form action="<?= base_url('/usuario/login_usuario') ?>" method="post">
				<div class="form-group">
					<label class="text-light" for="username">Nome de Usuário:</label><br>
					<input type="text" class="form-controll col-md-12" id="username" name="username" required>
				</div>
				<div class="form-group">
					<label class="text-light" for="password">Senha:</label><br>
					<input type="password" class="form-controll col-md-12" id="password" name="password" required>
				</div><br>
				<button type="submit" class="btn btn-danger col-md-12">Login</button>
			</form>
		</div>
	</div>
</div>
