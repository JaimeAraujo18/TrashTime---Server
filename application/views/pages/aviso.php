<table class="table">
	<thead>
		<tr>
			<th scope="col">ID</th>
			<th scope="col">Título</th>
			<th scope="col">Texto</th>
			<th scope="col">Data de início</th>
			<th scope="col">Data de fim</th>
			<th scope="col">ID do bairro</th>
		</tr>
	</thead>
	<tbody>
		<?php
		foreach ($avisos as $aviso) { ?>
			<tr>
      			<th scope='row'><?= $aviso['id'] ?></th>
			    <td><?= character_limiter($aviso['titulo'],50) ?></td>
			    <td><?= character_limiter($aviso['texto'], 50) ?></td>
			    <td><?= dateFormat('d-m-Y',$aviso['data_inicio']) ?></td>
			    <td><?= dateFormat('d-m-Y',$aviso['data_fim']) ?></td>
			    <td><?= $aviso['bairro_id'] ?></td>
			    <td>
			    	<button class="btn btn-danger btn-sm"></button>
			    	<button class="btn btn-danger btn-sm"></button>
			    </td>
    		</tr>
		<? endforeach ?>


		?>
	</tbody>
</table>