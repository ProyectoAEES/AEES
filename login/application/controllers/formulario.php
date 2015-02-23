<?php
/**
* 
*/
class Formulario extends CI_Controller
{
	
	function __construct()
	{
		parent :: __construct();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->library('form_validation');

	}

	public function index()
	{
		$data = array(
			
			"Titulo"=> "Formulario"
			);
		$this->load->view('formulario_view',$data); // asi se le mandan datos a la vista
	}

	public function validar()
	{
        
		$this->form_validation->set_rules('nombre', 'Nombre de usuario', 'required|min_length[2]|max_length[12]');
		$this->form_validation->set_rules('Password', 'Password', 'required');
		$this->form_validation->set_rules('deporte[]','Deporte Favorito', 'required|trim|callback_valid_deporte');

		// reglas de validacon 

		$this->form_validation->set_message('required', 'El campo %s  es requerido');
		$this->form_validation->set_message('Password', 'El campo de password es requerido');
		$this->form_validation->set_message('valid_deporte', 'El deporte no algo');

										  // nombre del input - titulo del input- algun valor agregado
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('formulario_view');
		}
		else
		{
			$this->load->view('success_view');
		}
	}

	function valid_deporte($deporte)
	{
		$deporte = array($deporte);
		$con = 0; 
		foreach ($deporte as $d)
		 {
			switch ($d) 
			{
				case 'futbol':
				$con ++;
					break;
					case 'volley':
				$con ++;
					break;
				
				default:
					$con--;
					break;
			}
			# code...
		}

		if($con == count($deporte))
		{
			return true;
		}

		else {
			return false;
		}
	}
}
?>