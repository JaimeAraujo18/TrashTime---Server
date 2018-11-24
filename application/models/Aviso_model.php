<?php

/**
 * 
 */
class Aviso_model extends CI_Model
{
	public function listarAvisos()
	{
		$result = $this->db->get('aviso')->result_array();
		if ($result == null) {
			$result['nulo']=true;
		}
		return $result;
	}

	public function inserirAviso($aviso)
	{
		$this->db->insert("aviso", $aviso);
		$this->session->set_flashdata("success", "Aviso inserido com successo!");
		redirect(base_url("/aviso"));
	}
}