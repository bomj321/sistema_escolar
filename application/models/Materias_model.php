<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Materias_model extends CI_Model {	
	
	public function save($data){
		return $this->db->insert("materias",$data);
	}


	public function getMaterias(){
		$this->db->select("m.*,usu.nombre_usuario as profesor");
		$this->db->from("materias m");
		$this->db->join("usuarios usu","m.id_profesor = usu.id_usuario");
		$this->db->where("m.estado_materia","1");
		$resultados = $this->db->get();
		return $resultados->result();
	}

	
}
