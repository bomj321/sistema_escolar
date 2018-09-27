<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Usuarios_model");
	}

	
	public function add()
	{
		$this->layout->view("add");	
	}

	public function create()
	{
		$usuario        = $this->input->post("usuario");
		$cedula_usuario = $this->input->post("cedula_usuario");
		$edad_usuario   = $this->input->post("edad_usuario");
		$descripcion    = $this->input->post("descripcion");
		$tipo_usuario   = $this->input->post("tipo_usuario");

		$this->form_validation->set_rules("usuario","Nombre Usuario","required");
		$this->form_validation->set_rules("cedula_usuario","Cedula Usuario","required|is_unique[usuarios.cedula_usuario]");
		$this->form_validation->set_rules("edad_usuario","Edad del Usuario","required");
		$this->form_validation->set_rules("descripcion","Descripcion","required");
		$this->form_validation->set_rules("tipo_usuario","Tipo de Usuario","required");

		if ($this->form_validation->run()) {
			$data = array(
				'nombre_usuario'    => $usuario, 
				'cedula_usuario'    => $cedula_usuario,
				'edad_usuario'      => $edad_usuario,
				'descripcion'       => $descripcion,
				'tipo_usuario'      => $tipo_usuario,
				'estado_usuario'    => '1',
				
				
			);

			if ($this->Usuarios_model->save($data)) 
			{
				redirect(base_url()."dashboard");
			}
			else
			{
				$this->session->set_flashdata("error","No se pudo guardar la informacion");
				redirect(base_url()."usuarios/add");
			}

		}else
		{
			$this->add();
		}
	}


	public function list()
	{
		$data = array(
					'usuarios' => $this->Usuarios_model->getUsuarios(), 
				);

				$this->layout->view("list",$data);
	}
}
