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
}