<div class="page-content minheight">
	<div class="container">
		<div class="col-md-12 row">
			<?php if (!$this->session->flashdata("success")){
				redirect(base_url('/usuario/login'));
			}else{ ?>				
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
			<?php } ?>
		</div>
	</div>
</div>
<?php 
// col-md-4
?>