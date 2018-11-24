<div class="nav-top">
	<nav class="navbar navbar-expand-lg navbar-light bg-black-">
		<div class="container">
			<a href="<?= base_url('/home') ?>" class="navbar-brand text-light">Home</a>
			<button class="navbar-toggler" type="button" data-toggler="collapse" data-target="#navbarSupportedContent">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item"><a href="<?= base_url('/home') ?>" class="nav-link text-light">Início</a></li>
					<li class="nav-item"><a href="<?= base_url('/cidade') ?>" class="nav-link text-light">Cidades</a></li>
					<li class="nav-item"><a href="<?= base_url('/bairro') ?>" class="nav-link text-light">Bairros</a></li>
					<li class="nav-item"><a href="<?= base_url('/aviso') ?>" class="nav-link text-light">Avisos</a></li>
				</ul>
				<?php if($this->session->userdata("usuario logado")) : ?>
					<a href="<?= base_url('/usuario/logout') ?>" class="btn btn-default bg-light"">Logout</a>
				<?php else : ?>
					<a href="<?= base_url('/usuario/login') ?>" class="btn btn-default text-light">Login</a>
				<?php endif ?>
			</div>
		</div>
	</nav>
</div>