<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cidade extends CI_Controller
{
	public function __construct (){
		parent::__construct();
		$this->load->model("Cidade_model");
	}
	public function index()
	{
		$dados['titulo']='Cidades - TrashTime';
		$dados['cidades']=$this->Cidade_model->listarCidades();

		$this->load->view('templates/header', $dados);
		$this->load->view('templates/nav-top', $dados);
		$this->load->view('pages/cidade', $dados);
		$this->load->view('templates/footer', $dados);
		$this->load->view('templates/js', $dados);
	}
	public function formCidade()
	{
		$dados['titulo']='Adicionar cidade - TrashTime';
		
		$this->load->view('templates/header', $dados);
		$this->load->view('templates/nav-top', $dados);
		$this->load->view('pages/cidadeForm', $dados);
		$this->load->view('templates/footer', $dados);
		$this->load->view('templates/js', $dados);
	}
	public function novoCidade()
	{
		$cidade = array(
			"nome"=>$this->input->post("nome"),
		);
		$this->Cidade_model->inserir($cidade);
		redirect(base_url("/cidade"));
	}
	public function excluir($id)
	{
		$this->Cidade_model->excluir("cidade",$id);
		redirect(base_url("/cidade"));
	}
	public function editar($id)
	{
		$dados['titulo']= "Editar cidade - TrashTime";
		$dados['cidade'] = $this->db->get_where("cidade", array ('id' => $id))->result_array();

		$this->load->view('templates/header', $dados);
		$this->load->view('templates/nav-top', $dados);
		$this->load->view('pages/cidadeForm', $dados);
		$this->load->view('templates/footer', $dados);
		$this->load->view('templates/js', $dados);
	}
	public function updateCidade($id)
	{
		$cidade = array(
			"id"=>$id,
			"nome"=>$this->input->post("nome")
		);
		$this->Cidade_model->atualizar("cidade",$cidade);
		redirect(base_url("/cidade"));
	}
}