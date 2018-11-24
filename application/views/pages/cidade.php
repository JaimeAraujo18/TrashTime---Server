<div class="page-content minheight">
	<div class="container">
		<div class="jumbotron bg-gray">
			<?php if (!$this->session->flashdata("success")){
				redirect(base_url('/usuario/login'));
			}else{ ?>
				<p class="bg-light text-dark">cidade</p>
			<?php } ?>
		</div>
	</div>
</div>