<div class="page-content minheight">
	<div class="container">
		<div class="jumbotron bg-gray">
			<?php if (isset($nulo)){
				echo "<div class='row'><h2 class='display-4 col'>Nenhum aviso disponível:</h2></div>";
				$hide=true;
			}
			if (!isset($hide)) { ?>
				<table class="table">
				  <thead class="thead-dark">
				    <tr>
				      <th scope="col">ID</th>
				      <th scope="col">First</th>
				      <th scope="col">Last</th>
				      <th scope="col">Handle</th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr>
				      <th scope="row">1</th>
				      <td>Mark</td>
				      <td>Otto</td>
				      <td>@mdo</td>
				    </tr>
				    <tr>
				      <th scope="row">2</th>
				      <td>Jacob</td>
				      <td>Thornton</td>
				      <td>@fat</td>
				    </tr>
				    <tr>
				      <th scope="row">3</th>
				      <td>Larry</td>
				      <td>the Bird</td>
				      <td>@twitter</td>
				    </tr>
				  </tbody>
				</table>

				<div class="table-responsive">
					<table class="table table-sm table-striped">
						<thead class="thead-light">
							<tr>
								<th style="width: 8.33%" scope="col">ID</th>
								<th style="width: 16.66%" scope="col">Título</th>
								<th style="width: 25%%" scope="col">Texto</th>
								<th style="width: 8.33%" scope="col">Data início</th>
								<th style="width: 8.33%" scope="col">Data fim</th>
								<th style="width: 8.33%" scope="col">ID bairro</th>
								<th style="width: 16.66%" scope="col">Ações</th>
							</tr>
						</thead>
						<tbody>
						<?php
							foreach ($avisos as $aviso) {echo
							"<tr>
								<th scope='row'>".$aviso['id']."</th>
								<td>".character_limiter($aviso['titulo'],50)."</td>
								<td>".character_limiter($aviso['texto'], 50)."</td>
								<td>".dateFormat('d-m-Y',$aviso['data_inicio'])."</td>
								<td>".dateFormat('d-m-Y',$aviso['data_fim'])."</td>
								<td>".$aviso['bairro_id']."</td>
								<td>
									<a href='".base_url('/aviso/excluir')."' class='btn btn-danger btn-sm'>Excluir</a>
									<a href='".base_url('/aviso/editar')."' class='btn btn-primary btn-sm'>Editar</a>
							    </td>
				    		</tr>";
				    	}?>
						</tbody>
					</table>
			</div>
				
			<?php } ?>
		</div>
	</div>
</div>