<?php

/**
 * 
 */
class Cidade_model extends CI_Model
{
	public function listarCidades()
	{
		return $this->db->get('cidade')->result_array();
	}
}