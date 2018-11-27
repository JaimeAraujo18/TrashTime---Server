<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aviso extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Aviso_model");
	}
	public function index()
	{
		$dados['titulo']='Avisos - TrashTime';
		$dados['avisos']=$this->Aviso_model->listarAvisos();
		$this->load->model("Cidade_model");
		$dados['cidades']=$this->Cidade_model->listarCidades();

		$this->load->view('templates/header', $dados);
		$this->load->view('templates/nav-top', $dados);
		$this->load->view('pages/aviso', $dados);
		$this->load->view('templates/footer', $dados);
		$this->load->view('templates/js', $dados);
	}
	public function formAviso()
	{
		date_default_timezone_set('America/Sao_Paulo');
		$dados['data']=date("Y-m-d");
		$this->load->model("Bairro_model");
		$this->load->model("Cidade_model");
		$dados['titulo']='Novo aviso - TrashTime';
		$dados['bairros']=$this->Bairro_model->listarBairros();
		$dados['cidades']=$this->Cidade_model->listarCidades();
		
		$this->load->view('templates/header', $dados);
		$this->load->view('templates/nav-top', $dados);
		$this->load->view('pages/avisoForm', $dados);
		$this->load->view('templates/footer', $dados);
		$this->load->view('templates/js', $dados);
	}
	public function novoAviso()
	{
		$aviso = array(
			"titulo"=>$this->input->post("titulo"),
			"texto"=>$this->input->post("texto"),
			"data_inicio"=>dateFormat('Y-m-d',$this->input->post("dataInicio")),
			"data_fim"=>dateFormat('Y-m-d',$this->input->post("dataFim")),
			"bairro_id"=>$this->input->post("bairroID")
		);
		$this->Aviso_model->inserir($aviso);
		redirect(base_url("/aviso"));
	}
	public function excluir($id)
	{
		$this->Aviso_model->excluir("aviso",$id);
		redirect(base_url("/aviso"));
	}
	public function editar($id)
	{
		date_default_timezone_set('America/Sao_Paulo');
		$dados['data']=date("Y-m-d");
		$dados['titulo']= "Editar Aviso - TrashTime";
		$dados['aviso'] = $this->db->get_where("aviso", array ('id' => $id))->result_array();

		$this->load->view('templates/header', $dados);
		$this->load->view('templates/nav-top', $dados);
		$this->load->view('pages/avisoForm', $dados);
		$this->load->view('templates/footer', $dados);
		$this->load->view('templates/js', $dados);
	}
	public function updateAviso($id)
	{
		$aviso = array(
			"id"=>$id,
			"titulo"=>$this->input->post("titulo"),
			"texto"=>$this->input->post("texto"),
			"data_inicio"=>dateFormat('Y-m-d',$this->input->post("dataInicio")),
			"data_fim"=>dateFormat('Y-m-d',$this->input->post("dataFim")),
			"bairro_id"=>$this->input->post("bairroID"),
			"cidade_id"=>$this->input->post("cidadeID")
		);
		$this->Aviso_model->atualizar("aviso",$aviso);
		redirect(base_url("/aviso"));
	}
}
