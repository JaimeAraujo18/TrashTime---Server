<div class="page-content minheight">
	<div class="container">
		<div class="jumbotron bg-gray">
		<?php
			if (null == $this->session->userdata("nome")){
				redirect(base_url('/usuario'));
			}else{ 

				if(!isset($bairro)){
					$bairro[0]['nome']="";
					$bairro[0]['dia_seco1']="";
					$bairro[0]['dia_seco2']="";
					$bairro[0]['dia_org1']="";
					$bairro[0]['dia_org2']="";
					$bairro[0]['cidade_id']="";
					$new="";
				}
			?>
				<h2 class="text-light display-4">Cadastro de Bairro:</h2>
				<div id="erroBairro" class="hidden col-md-12 alert alert-danger">Selecione opções válidas</div>
				<hr class="my-4 bg-light">
				<form id="formBairro" action="<?php if(isset($new)){echo base_url('/bairro/novoBairro');}else{echo base_url('/bairro/updateBairro/'.$bairro[0]['id']);} ?>" method="post">
					<div class="form-group">
						<label class="text-light" for="nome">Nome do bairro:</label><br>
						<input type="text" class="form-controll col-md-12" id="nome" name="nome" required value="<?= $bairro[0]['nome'] ?>">
					</div>
					<div class="form-group">
						<label class="text-light" for="diaSeco1">Primeiro dia da semana em que a coleta de lixo seco ocorre:</label><br>
						<select name="diaSeco1" id="diaSeco1" class="col-md-12 form-controll" required>
							<?php if(isset($new)){echo "<option value'teste' class='col-md-12 form-controll'>Selecione um dia</option>";}else{echo "<option value='".$bairro[0]['dia_seco1']." class='col-md-12 form-controll'>Dia Atual</option>";}?>
							<option value="1" class="col-md-12 form-controll">Domingo</option>
							<option value="2" class="col-md-12 form-controll">Segunda-Feira</option>
							<option value="3" class="col-md-12 form-controll">Terça-Feira</option>
							<option value="4" class="col-md-12 form-controll">Quarta-Feira</option>
							<option value="5" class="col-md-12 form-controll">Quinta-Feira</option>
							<option value="6" class="col-md-12 form-controll">Sexta-Feira</option>
							<option value="7" class="col-md-12 form-controll">Sábado</option>
						</select>
					</div>
					<div class="form-group">
						<label class="text-light" for="diaSeco2">Segundo dia da semana em que a coleta de lixo seco ocorre:</label><br>
						<select name="diaSeco2" id="diaSeco2" class="col-md-12 form-controll" required>
							<?php if(isset($new)){echo "<option value'null' class='col-md-12 form-controll'>Selecione um dia</option>";}else{echo "<option value='".$bairro[0]['dia_seco2']." class='col-md-12 form-controll'>Dia Atual</option>";}?>
							<option value="1" class="col-md-12 form-controll">Domingo</option>
							<option value="2" class="col-md-12 form-controll">Segunda-Feira</option>
							<option value="3" class="col-md-12 form-controll">Terça-Feira</option>
							<option value="4" class="col-md-12 form-controll">Quarta-Feira</option>
							<option value="5" class="col-md-12 form-controll">Quinta-Feira</option>
							<option value="6" class="col-md-12 form-controll">Sexta-Feira</option>
							<option value="7" class="col-md-12 form-controll">Sábado</option>
						</select>
					</div>
					<div class="form-group">
						<label class="text-light" for="diaOrg1">Primeiro dia da semana em que a coleta de lixo orgânico ocorre:</label><br>
						<select name="diaOrg1" id="diaOrg1" class="col-md-12 form-controll" required>
							<?php if(isset($new)){echo "<option value'null' class='col-md-12 form-controll'>Selecione um dia</option>";}else{echo "<option value='".$bairro[0]['dia_org1']." class='col-md-12 form-controll'>Dia Atual</option>";}?>
							<option value="1" class="col-md-12 form-controll">Domingo</option>
							<option value="2" class="col-md-12 form-controll">Segunda-Feira</option>
							<option value="3" class="col-md-12 form-controll">Terça-Feira</option>
							<option value="4" class="col-md-12 form-controll">Quarta-Feira</option>
							<option value="5" class="col-md-12 form-controll">Quinta-Feira</option>
							<option value="6" class="col-md-12 form-controll">Sexta-Feira</option>
							<option value="7" class="col-md-12 form-controll">Sábado</option>
						</select>
					</div>
					<div class="form-group">
						<label class="text-light" for="diaOrg2">Segundo dia da semana em que a coleta de lixo orgânico ocorre:</label><br>
						<select name="diaOrg2" id="diaOrg2" class="col-md-12 form-controll" required>
							<?php if(isset($new)){echo "<option value'null' class='col-md-12 form-controll'>Selecione um dia</option>";}else{echo "<option value='".$bairro[0]['dia_org2']." class='col-md-12 form-controll'>Dia Atual</option>";}?>							
							<option value="1" class="col-md-12 form-controll">Domingo</option>
							<option value="2" class="col-md-12 form-controll">Segunda-Feira</option>
							<option value="3" class="col-md-12 form-controll">Terça-Feira</option>
							<option value="4" class="col-md-12 form-controll">Quarta-Feira</option>
							<option value="5" class="col-md-12 form-controll">Quinta-Feira</option>
							<option value="6" class="col-md-12 form-controll">Sexta-Feira</option>
							<option value="7" class="col-md-12 form-controll">Sábado</option>
						</select>
					</div>
					<div class="form-group">
						<label class="text-light" for="cidadeID">ID da cidade:</label><br>
						<select class="col-md-12 form-controll" id="cidadeID" name="cidadeID" required>
						<?php if(isset($new)){echo "<option value'null' class='col-md-12 form-controll'>Selecione uma cidade</option>";}else{echo "<option value='".$bairro[0]['dia_org2']." class='col-md-12 form-controll'>Dia Atual</option>";}
						foreach ($cidades as $cidade)
						{
							echo "<option value='".$cidade['id']."'>".$cidade['nome']."</option>";
						}

						?>
						</select>

					</div><br>
					<button type="submit" class="btn btn-danger col-md-12">Enviar</button>
				</form>
		<?php } ?>
		</div>
	</div>
</div>