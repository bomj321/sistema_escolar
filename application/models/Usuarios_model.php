<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends CI_Model {
	
	public function login($usuario, $contraseña)
	{
		$this->db->where("nombre_usuario", $usuario);
		$this->db->where("cedula_usuario", $contraseña);
		$this->db->where("estado_usuario", 1);

		$resultados = $this->db->get("usuarios");
		if ($resultados->num_rows() > 0) {
			return $resultados->row();
		}
		else{
			return false;
		}
	}

	public function save($data)
	{
		return $this->db->insert("usuarios",$data);
	}

	public function getProfesores()
	{
		$this->db->where("tipo_usuario", 2);
		$resultados = $this->db->get("usuarios");
		return $resultados->result();
	}

	public function getUsuarios()
	{
		$resultados = $this->db->get("usuarios");
		return $resultados->result();
	}
}
