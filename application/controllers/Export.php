<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Export extends CI_Controller
{
	header('Access-Control-Allow-Origin: *');
	header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method');
	header('Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE');
	$method = $_SERVER['REQUEST_METHOD'];
	if($method == 'OPTIONS') {
		die();
	}
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
