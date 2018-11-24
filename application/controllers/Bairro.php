<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bairro extends CI_Controller {

	public function index()
	{
		$dados['titulo']='Bairros - TrashTime.';

		$this->load->view('templates/header', $dados);
		$this->load->view('templates/nav-top', $dados);
		$this->load->view('pages/bairro', $dados);
		$this->load->view('templates/footer', $dados);
		$this->load->view('templates/js', $dados);
	}
}