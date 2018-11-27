<?php

/**
 * 
 */
class bairro_model extends CI_Model
{
	public function listarBairros()
	{
		return $this->db->get('bairro')->result_array();
	}
	public function inserir($bairro)
	{
		$this->db->insert("bairro", $bairro);
	}
	public function excluir($table, $id)
	{
		$this->db->delete($table,array('id' => $id));
	}
	public function atualizar($id, $bairro)
	{
		$this->db->replace('bairro', $bairro);
	}
}