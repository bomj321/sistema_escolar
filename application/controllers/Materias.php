<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Materias extends CI_Controller {

			public function __construct()
			{
				parent::__construct();
				$this->load->model("Usuarios_model");
				$this->load->model("Materias_model");
			}

			public function add()
			{
				$data = array(
					"profesores" => $this->Usuarios_model->getProfesores(),
				);
				$this->layout->view("add",$data);
			}

			public function create()
			{
				$materia             = $this->input->post("materia");
				$descripcion_materia = $this->input->post("descripcion_materia");
				$profesor            = $this->input->post("profesor");

				$this->form_validation->set_rules("materia","Nombre de la materia","required|is_unique[materias.nombre_materia]");
				$this->form_validation->set_rules("descripcion_materia","Descripcion de la Materia","required");
				$this->form_validation->set_rules("profesor","Profesores","required");
				

				if ($this->form_validation->run()) {
					$data = array(
						'nombre_materia'       => $materia,
						'id_profesor'          => $profesor, 
						'descripcion_materia'  => $descripcion_materia,
						'estado_materia'       => '1'
						
						
					);

					if ($this->Materias_model->save($data)) 
					{
						redirect(base_url()."dashboard");
					}
					else
					{
						$this->session->set_flashdata("error","No se pudo guardar la informacion");
						redirect(base_url()."materias/add");
					}

				}else
				{
					$this->add();
				}
			}


			public function list()
			{
				$data = array(
					'materias' => $this->Materias_model->getMaterias(), 
				);

				$this->layout->view("list",$data);
			}
}	
