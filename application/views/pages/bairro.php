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
							foreach ($bairros as $bairro) {
								$dias1;
								$dias2;
								$diao1;
								$diao2;
									switch ($bairro['dia_seco1']){
										case 1:$dias1 = "Domingo";break;
										case 2:$dias1 = "Segunda-Feira";break;
										case 3:$dias1 = "Terça-Feira";break;
										case 4:$dias1 = "Quarta-Feira";break;
										case 5:$dias1 = "Quinta-Feira";break;
										case 6:$dias1 = "Sexta-Feira";break;
										case 7:$dias1 = "Sábado";break;
									}
									switch ($bairro['dia_seco2']){
										case 1:$dias2 = "Domingo";break;
										case 2:$dias2 = "Segunda-Feira";break;
										case 3:$dias2 = "Terça-Feira";break;
										case 4:$dias2 = "Quarta-Feira";break;
										case 5:$dias2 = "Quinta-Feira";break;
										case 6:$dias2 = "Sexta-Feira";break;
										case 7:$dias2 = "Sábado";break;
									}
									switch ($bairro['dia_org1']){
										case 1:$diao1 = "Domingo";break;
										case 2:$diao1 = "Segunda-Feira";break;
										case 3:$diao1 = "Terça-Feira";break;
										case 4:$diao1 = "Quarta-Feira";break;
										case 5:$diao1 = "Quinta-Feira";break;
										case 6:$diao1 = "Sexta-Feira";break;
										case 7:$diao1 = "Sábado";break;
									}
									switch ($bairro['dia_org2']){
										case 1:$diao2 = "Domingo";break;
										case 2:$diao2 = "Segunda-Feira";break;
										case 3:$diao2 = "Terça-Feira";break;
										case 4:$diao2 = "Quarta-Feira";break;
										case 5:$diao2 = "Quinta-Feira";break;
										case 6:$diao2 = "Sexta-Feira";break;
										case 7:$diao2 = "Sábado";break;
									}
								echo
							"<tr>
								<th scope='row'>".$bairro['id']."</th>
								<td>".character_limiter($bairro['nome'],50)."</td>
								<td>".$dias1."</td>
								<td>".$dias2."</td>
								<td>".$diao1."</td>
								<td>".$diao2."</td>
								<td>".$cidade['nome']."</td>
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
