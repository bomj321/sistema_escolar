<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notas extends CI_Controller {
	
	public function add()
	{
		$this->layout->view("add");
	}
}
