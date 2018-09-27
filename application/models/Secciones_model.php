<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Secciones_model extends CI_Model {
	
	public function save($data){
		return $this->db->insert("secciones",$data);
	}

	public function getSecciones(){
		$resultados = $this->db->get("secciones");
		return $resultados->result();
	}
}
