<div class="page-content minheight">
	<div class="container">
		<div class="jumbotron bg-gray">
		<?php if (null == $this->session->userdata("nome")){
			redirect(base_url('/usuario'));
		}else{ ?>
			<div class="row">
				<p class="col-md-10"></p>
				<a href="<?= base_url('/cidade/formCidade'); ?>" id='btn' class="col-md-2 float-right btn btn-primary btn-lg">Nova cidade</a>
			</div>			
				<br><div class="table-responsive">
					<table class="table table-sm table-striped">
						<thead class="thead-light">
							<tr>
								<th scope="col">ID</th>
								<th scope="col">Nome</th>
								<th scope="col">Ações</th>
							</tr>
						</thead>
						<tbody>
						<?php
						if (isset($cidades)) {
							foreach ($cidades as $cidade) {echo
							"<tr>
								<th scope='row'>".$cidade['id']."</th>
								<td>".$cidade['nome']."</td>
								<td class='row' id='tdcidade'>
									<a href='".base_url('/cidade/excluir/'.$cidade['id'])."' class='ml-3 btn btn-danger btn-sm'>Excluir</a>
									<a href='".base_url('/cidade/editar/'.$cidade['id'])."' class='ml-4 btn btn-primary btn-sm'>Editar</a>
							    </td>
				    		</tr>";
							}
						}?>
						</tbody>
					</table>
				</div>
		<?php } ?>
		</div>
	</div>
</div>