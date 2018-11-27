<div class="page-content minheight">
	<div class="container">
		<div class="jumbotron bg-gray">
		<?php
			if (null == $this->session->userdata("nome")){
				redirect(base_url('/usuario'));
			}else{ 

				if(!isset($cidade)){
					$cidade[0]['nome']="";
					$new="";
				}
			?>
				<h2 class="text-light display-4">Cadastro de cidade:</h2>
				<hr class="my-4 bg-light">
				<form action="<?php if(isset($new)){echo base_url('/cidade/novoCidade');}else{echo base_url('/cidade/updateCidade/'.$cidade[0]['id']);} ?>" method="post">
					<div class="form-group">
						<label class="text-light" for="nome">Nome da cidade:</label><br>
						<input type="text" class="form-controll col-md-12" id="nome" name="nome" required value="<?= $cidade[0]['nome'] ?>">
					</div>
					<button type="submit" class="btn btn-danger col-md-12">Enviar</button>
				</form>
		<?php } ?>
		</div>
	</div>
</div>