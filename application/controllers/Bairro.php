<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bairro extends CI_Controller
{
	public function __construct (){
		parent::__construct();
		$this->load->model("Bairro_model");
	}
	public function index()
	{
		$dados['titulo']='Bairros - TrashTime';
		$dados['bairros']=$this->Bairro_model->listarBairros();
		$this->load->model("Cidade_model");
		$dados['cidades'] = $this->Cidade_model->listarCidades();

		$this->load->view('templates/header', $dados);
		$this->load->view('templates/nav-top', $dados);
		$this->load->view('pages/bairro', $dados);
		$this->load->view('templates/footer', $dados);
		$this->load->view('templates/js', $dados);
	}
	public function formBairro()
	{
		$dados['titulo']='Adicionar bairro - TrashTime';
		$this->load->model("Cidade_model");
		$dados['cidades']=$this->Cidade_model->listarCidades();
		
		$this->load->view('templates/header', $dados);
		$this->load->view('templates/nav-top', $dados);
		$this->load->view('pages/bairroForm', $dados);
		$this->load->view('templates/footer', $dados);
		$this->load->view('templates/js', $dados);
	}
	public function novoBairro()
	{
		$bairro = array(
			"nome"=>$this->input->post("nome"),
			"dia_seco1"=>$this->input->post("diaSeco1"),
			"dia_seco2"=>$this->input->post("diaSeco2"),
			"dia_org1"=>$this->input->post("diaOrg1"),
			"dia_org2"=>$this->input->post("diaOrg2"),
			"cidade_id"=>$this->input->post("cidadeID")
		);
		$this->Bairro_model->inserir($bairro);
		redirect(base_url("/bairro"));
	}
	public function excluir($id)
	{
		$this->Bairro_model->excluir("bairro",$id);
		redirect(base_url("/bairro"));
	}
	public function editar($id)
	{
		$dados['titulo']= "Editar bairro - TrashTime";
		$dados['bairro'] = $this->db->get_where("bairro", array ('id' => $id))->result_array();

		$this->load->view('templates/header', $dados);
		$this->load->view('templates/nav-top', $dados);
		$this->load->view('pages/bairroForm', $dados);
		$this->load->view('templates/footer', $dados);
		$this->load->view('templates/js', $dados);
	}
	public function updateBairro($id)
	{
		$bairro = array(
			"id"=>$id,
			"nome"=>$this->input->post("nome"),
			"dia_seco1"=>$this->input->post("diaSeco1"),
			"dia_seco2"=>$this->input->post("diaSeco2"),
			"dia_org1"=>$this->input->post("diaOrg1"),
			"dia_org2"=>$this->input->post("diaOrg2"),
			"cidade_id"=>$this->input->post("cidadeID")
		);
		$this->Bairro_model->atualizar("bairro",$bairro);
		redirect(base_url("/bairro"));
	}
}
