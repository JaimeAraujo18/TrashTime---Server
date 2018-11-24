<div class="page-content minheight">
	<div class="container">
		<div class="jumbotron bg-gray">
			<?php if (!$this->session->flashdata("success")){
				redirect(base_url('/usuario/login'));
			}else{ ?>
				<h2 class="text-light display-4">Cadastro de Aviso:</h2>
				<hr class="my-4 bg-light">
				<form action="<?= base_url('/aviso/insert') ?>" method="post">
					<div class="form-group">
						<label class="text-light" for="titulo">Título do aviso:</label><br>
						<input type="text" class="form-controll col-md-12" id="titulo" name="titulo" required>
					</div>
					<div class="form-group">
						<label class="text-light" for="texto">Texto:</label><br>
						<textarea type="text" class="form-controll col-md-12" id="texto" name="texto" required/>
					</div>
					<div class="form-group">
						<label class="text-light" for="dataInicio">Data de início:</label><br>
						<input type="text" class="form-controll col-md-12" id="dataInicio" name="dataInicio" placeholder="dd/mm/aaaa" required>
					</div>
					<div class="form-group">
						<label class="text-light" for="dataFim">Data de Término:</label><br>
						<input type="text" class="form-controll col-md-12" id="dataFim" name="dataFim" placeholder="dd/mm/aaaa" required>
					</div>
					<div class="form-group">
						<label class="text-light" for="bairroID">ID do bairro:</label><br>
						<input type="text" class="form-controll col-md-12" id="bairroID" name="bairroID" required>
					</div>
					<button type="submit" class="btn btn-danger col-md-12">Enviar</button>
				</form>
			<?php } ?>
		</div>
	</div>
</div>