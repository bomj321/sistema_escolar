<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Secciones extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Secciones_model");
	}
	
	public function index()
	{
		$this->layout->view("add");
	}

	public function create()
	{
		$seccion = $this->input->post("seccion");
		$descripcion_seccion = $this->input->post("descripcion_seccion");
		$this->form_validation->set_rules("seccion","Nombre Seccion","required|is_unique[secciones.nombre_seccion]");

		if ($this->form_validation->run()) {
			$data = array(
				'nombre_seccion'      => $seccion, 
				'descripcion_seccion' => $descripcion_seccion,
				'estado_seccion'      => '1',
				
			);

			if ($this->Secciones_model->save($data)) 
			{
				redirect(base_url()."dashboard");
			}
			else
			{
				$this->session->set_flashdata("error","No se pudo guardar la informacion");
				redirect(base_url()."secciones");
			}

		}else
		{
			$this->index();
		}
	}


	public function list()
	{
		$data = array(
					'secciones' => $this->Secciones_model->getSecciones(), 
				);

				$this->layout->view("list",$data);
	}
}
