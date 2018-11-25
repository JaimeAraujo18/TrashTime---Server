<div class="page-content minheight">
	<div class="container">
		<div class="jumbotron bg-gray">
		<?php if (null == $this->session->userdata("nome")){
			redirect(base_url('/usuario'));
		}else{ ?>
			<div class="row">
				<p class="col-md-10"></p>
				<a href="<?= base_url('/bairro/formBairro'); ?>" id='btn' class="col-md-2 float-right btn btn-primary btn-lg">Novo bairro</a>
			</div>			
				<br><div class="table-responsive">
					<table class="table table-sm table-striped">
						<thead class="thead-light">
							<tr>
								<th scope="col">ID</th>
								<th scope="col">Nome</th>
								<th scope="col">1º dia seco</th>
								<th scope="col">2º dia seco</th>
								<th scope="col">1º dia orgânico</th>
								<th scope="col">2º dia orgânico</th>
								<th scope="col">ID cidade</th>
								<th scope="col">Ações</th>
							</tr>
						</thead>
						<tbody>
						<?php
						if (isset($bairros)) {
							foreach ($bairros as $bairro) {echo
							"<tr>
								<th scope='row'>".$bairro['id']."</th>
								<td>".character_limiter($bairro['nome'],50)."</td>
								<td>".$bairro['dia_seco1']."</td>
								<td>".$bairro['dia_seco2']."</td>
								<td>".$bairro['dia_org1']."</td>
								<td>".$bairro['dia_org2']."</td>
								<td>".$bairro['cidade_id']."</td>
								<td class='row' id='td'>
									<a href='".base_url('/bairro/excluir/'.$bairro['id'])."' class='ml-3 btn btn-danger btn-sm'>Excluir</a>
									<a href='".base_url('/bairro/editar/'.$bairro['id'])."' class='ml-4 btn btn-primary btn-sm'>Editar</a>
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