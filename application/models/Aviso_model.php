<?php

/**
 * 
 */
class Aviso_model extends CI_Model
{
	public function listarAvisos()
	{
		return $this->db->get('aviso')->result_array();
	}

	public function novoAviso($aviso)
	{
		$this->db->insert("aviso", $aviso);
		$this->session->set_flashdata("success", "Aviso inserido com successo!");
		redirect(base_url("/aviso"));
	}
}