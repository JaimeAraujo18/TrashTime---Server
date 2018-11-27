<?php

/**
 * 
 */
class Usuario_model extends CI_Model{

	public function logar ($username, $password)
	{
		$this->db->where("username", $username);
		$this->db->where("password", $password);
		$usuario = $this->db->get("usuario")->row_array();
		return $usuario;
	}

}

?>
