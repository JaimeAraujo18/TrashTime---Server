<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aviso extends CI_Controller {

	public function __construct (){
		parent::__construct();
		$this->load->model("Aviso_modelo");
	}

	public function index()
	{
		$dados['titulo']='Avisos - TrashTime.';

		$this->load->view('templates/header', $dados);
		$this->load->view('templates/nav-top', $dados);
		$this->load->view('pages/aviso', $dados);
		$this->load->view('templates/footer', $dados);
		$this->load->view('templates/js', $dados);
	}
	public function novoAviso()
	{
		$aviso = array(
			"titulo"=>$this->input->post("titulo"),
			"texto"=>$this->input->post("texto"),
			"data_inicio"=>$this->input->post("dataInicio"),
			"data_fim"=>$this->input->post("dataFim"),
			"bairro_id"=>$this->input->post("bairroID")
		);
	}
}