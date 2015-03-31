<?php
class Inicio extends CI_Controller
{
	//esto siempre va
	public function __construct()
	{
		parent::__construct(); 
		$this->load->helper('form');
	}
	
	//cada clase debe tener la funcion index
	 public function index()
	{
		//echo "Hola yo soy el controlador";
		$this->load->view('inicio_view');
	}

	 public function index2()
	{
		echo "Hola desde el metodo 2 del controlador inicio";
		
	}
}
?>