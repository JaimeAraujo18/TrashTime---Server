<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

	public function index()
	{
		$dados['titulo']='Login - TrashTime.';

		$this->load->view('templates/header', $dados);
		$this->load->view('templates/nav-top', $dados);
		$this->load->view('pages/login', $dados);
		$this->load->view('templates/footer', $dados);
		$this->load->view('templates/js', $dados);
	}
	public function login_usuario()
	{
		$this->load->model("Usuario_model");

		$username = $this->input->post("username");
		$password = SHA1($this->input->post("password"));
		$usuario = $this->Usuario_model->logar($username, $password);
		if ($usuario) {
			$this->session->set_userdata($usuario);
			$this->session->set_flashdata("success",
				"Login efetuado com successo, bem vindo ".$this->session->userdata("usuario['nome']"."!"));
			redirect(base_url("/home"));
		}else{
			$this->session->set_flashdata("danger", "Usuário ou senha inválidos!");
			redirect(base_url("/usuario"));
		}
	}

	public function logout()
		{
			$this->session->sess_destroy();
			redirect(base_url("/usuario"));
		}
}