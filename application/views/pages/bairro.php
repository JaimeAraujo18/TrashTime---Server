<div class="page-content minheight">
	<div class="container">
		<div class="jumbotron bg-gray">
			<?php if (null == $this->session->userdata("nome")){
				redirect(base_url('/usuario/login'));
			}else{ ?>
				<p class="bg-light text-dark">bairro</p>
			<?php } ?>
		</div>
	</div>
</div>