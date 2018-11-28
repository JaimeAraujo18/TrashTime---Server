<?php
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Credentials: true');
class Export extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		date_default_timezone_set('America/Sao_Paulo');
		$data=date("Y-m-d");

		$this->load->model("Aviso_model");
		$this->load->model("Bairro_model");
		$this->load->model("Cidade_model");

		$dados['avisos']=$this->Aviso_model->Exportar($data);
		$dados['bairros']=$this->Bairro_model->listarBairros();
		$dados['cidades']=$this->Cidade_model->listarCidades();
		echo json_encode($dados);
	}
}
?>
