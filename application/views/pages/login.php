<div class="page-content minheight">
	<div class="container">
		<div class="jumbotron bg-gray">
			<?php if($this->session->flashdata('success')) : ?>
				<p class="alert alert-success"><?= $this->session->flashdata('success') ?></p>
			<?php endif ?>
			<?php if($this->session->flashdata('danger')) : ?>
				<p class="alert alert-danger"><?= $this->session->flashdata('danger') ?></p>
			<?php endif ?>

			<h2 class="text-light display-4">Fazer Login:</h2>
			<hr class="my-4 bg-light">
			<form action="<?= base_url('/usuario/login_usuario') ?>" method="post">
				<div class="form-group">
					<label class="text-light" for="username">Nome de Usuário:</label><br>
					<input type="text" class="form-controll col-md-12" id="username" name="username" required>
				</div>
				<div class="form-group">
					<label class="text-light" for="senha">Senha:</label><br>
					<input type="password" class="form-controll col-md-12" id="senha" name="senha" required>
				</div><br>
				<button type="submit" class="btn btn-danger col-md-12">Login</button>
			</form>
		</div>
	</div>
</div>