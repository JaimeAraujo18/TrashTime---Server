<div class="page-content minheight">
	<div class="container">
		<div class="jumbotron bg-gray">
		<?php if (null == $this->session->userdata("nome")){
			redirect(base_url('/usuario'));
		}else{ ?>
			<div class="row">
				<p class="col-md-10"></p>
				<a href="<?= base_url('/aviso/formAviso'); ?>" id='btn' class="col-md-2 float-right btn btn-primary btn-lg">Novo aviso</a>
			</div>
			<?php if (isset($nulo)){
				echo "<div class='row'><h2 class='display-4 col'>Nenhum aviso disponível:</h2></div>";
				$hide="";
			}
			if (!isset($hide)) { ?>				
				<br><div class="table-responsive">
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
								<td class='row' id='td'>
									<a href='".base_url('/aviso/excluir/'.$aviso['id'])."' class='ml-3 btn btn-danger btn-sm'>Excluir</a>
									<a href='".base_url('/aviso/editar/'.$aviso['id'])."' class='ml-4 btn btn-primary btn-sm'>Editar</a>
							    </td>
				    		</tr>";
				    		// $something = $this->input->get('something'); get da url
				    	}?>
						</tbody>
					</table>
				</div>
				
			<?php } ?>
		<?php } ?>
		</div>
	</div>
</div>