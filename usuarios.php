<?php

class Usuarios extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		
	}
	public function index ()
	{
		$this->load->view('usuarios_view');
	}
	public function registro()
	{
		$this->load->view('registro_view');
	}
}

?>