<?php

/**
 * 
 */
class cidade_model extends CI_Model
{
	public function listarCidades()
	{
		return $this->db->get('cidade')->result_array();
	}
	public function inserir($cidade)
	{
		$this->db->insert("cidade", $cidade);
	}
	public function excluir($table, $id)
	{
		$this->db->delete($table,array('id' => $id));
	}
	public function atualizar($id, $cidade)
	{
		$this->db->replace('cidade', $cidade);
	}
}