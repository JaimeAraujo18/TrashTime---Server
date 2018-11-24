<div class="page-content minheight">
	<div class="container">
		<div class="jumbotron bg-gray">
			<div class="row text-center">
			<?php if (null == $this->session->userdata("nome")) redirect(base_url('/usuario')); ?>
				<p class="col display-4">Bem vindo <?= $this->session->userdata("nome")?>!</p>
			</div>
			<hr class="my-4 bg-light">
			<div class="row">
				<a class="col" href="<?= base_url('/aviso') ?>">
					<div class="col-md-12 btn btn-default bg-light">
						<p class="mx-2 my-3 nav-link">Gerenciar Avisos</p>
					</div>
				</a>
				<a class="col" href="<?= base_url('/bairro') ?>">
					<div class="col-md-12 btn btn-default bg-light">
						<p class="mx-2 my-3 nav-link">Gerenciar Bairros</p>
					</div>
				</a>
				<a class="col" href="<?= base_url('/cidade') ?>">
					<div class="col-md-12 btn btn-default bg-light">
						<p class="mx-2 my-3 nav-link">Gerenciar Cidades</p>
					</div>
				</a>
			</div>
		</div>
	</div>
</div>
