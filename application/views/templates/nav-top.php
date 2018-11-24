<div class="nav-top">
	<nav class="navbar navbar-expand-lg navbar-light bg-black-">
		<div class="container">
			<a href="<?= base_url('/home') ?>" class="navbar-brand">Home</a>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item"><a href="<?= base_url('/home') ?>" class="nav-link">Início</a></li>
					<li class="nav-item"><a href="<?= base_url('/cidade') ?>" class="nav-link">Cidades</a></li>
					<li class="nav-item"><a href="<?= base_url('/bairro') ?>" class="nav-link">Bairros</a></li>
					<li class="nav-item"><a href="<?= base_url('/aviso') ?>" class="nav-link">Avisos</a></li>
				</ul>
				<?php if(null !== $this->session->userdata("nome")) : ?>
					<a href="<?= base_url('/usuario/logout') ?>" class="btn btn-default"">Logout</a>
				<?php else : ?>
					<a href="<?= base_url('/usuario/login') ?>" class="btn btn-default">Login</a>
				<?php endif ?>
			</div>
		</div>
	</nav>
</div>