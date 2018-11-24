<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->model('Aviso_model');
		$this->load->model('Bairro_model');
		$this->load->model('Cidade_model');
		$this->load->model('Usuario_model');

		$dados['titulo']	=	'Home - TrashTime.';
		$dados['bairros']	=	$this->Bairro_model->listarBairros();
		$dados['cidades']	=	$this->Cidade_model->listarCidades();

		$this->load->view('templates/header', $dados);
		$this->load->view('templates/nav-top', $dados);
		$this->load->view('pages/index', $dados);
		$this->load->view('templates/footer', $dados);
		$this->load->view('templates/js', $dados);
	}
}
