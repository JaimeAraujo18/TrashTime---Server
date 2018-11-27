<?php

/**
 * 
 */
class aviso_model extends CI_Model
{
	public function exportar($data)
	{
		return $this->db->query("SELECT * FROM `aviso` WHERE data_fim >= ".$data."")->result();
	}
	public function listarAvisos()
	{
		return $this->db->get('aviso')->result_array();
	}
	public function inserir($aviso)
	{
		$this->db->insert("aviso", $aviso);
	}
	public function excluir($table, $id)
	{
		$this->db->delete($table,array('id' => $id));
	}
	public function atualizar($id, $aviso)
	{
		$this->db->replace('aviso', $aviso);
	}
}