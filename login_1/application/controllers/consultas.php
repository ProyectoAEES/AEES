<?php
/**
* 
*/
class Consultas extends CI_Controller
{
	
	function __construct()
	{
		parent ::__construct();
		$this->load->model('consultas_model');
		$this->load->helper('form');
	}

	public function index ()
	{
		//echo "Esto es una prueba con la base de datos";
      $data = array(
      	"titulo"=> "Mis Consultas",
      	"usuario"=>$this->consultas_model->get_datos());

      $this->load->view('consultas_view',$data);
	}

	public function agregar_datos ()
	{
        if($this->input->post('submit'))
        {
        	$this->consultas_model->add_datos();
        	redirect ('formulario');
        }
	}

}
?>