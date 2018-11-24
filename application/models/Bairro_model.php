<?php

/**
 * 
 */
class Bairro_model extends CI_Model
{
	public function listarBairros()
	{
		return $this->db->get('bairro')->result_array();
	}
}