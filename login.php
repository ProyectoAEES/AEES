<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('login_model');
		$this->load->helper('form','url');
		$this->load->library('form_validation');
		$this->load->model('login_model');
		$this->load->database('proyecto');
	}

	public function index()
	{
		$this->load->view('login_view');
	}
		
	public function validar()
	{
		$datos = $this->login_model->leer();
		

		if($datos)
		{
				$login_array = array();
				foreach ($datos as $row ) {

					# code...

					$login_array = array('perfil' => $row->perfil,
						'username' => $row->username,
						 'password' => $row->password);
				}


		}

		else
		{
			echo "ERROR";
		}

		switch ($login_array['perfil'])
		{
			case "admin": 	
			$this->load->view("front_view");
			break;

			case "editor":
			echo "soy el editor";
			break;

			case "otro":
			echo "Soy otro";

		}
		/*if($datos['username'] == $this->input->post('user') & $datos['password'] == $this->input->post('pass') )
		   {
		   	switch ($datos['perfil'])
		{
			case "admin": 	
			$this->load->view("front_view");
			break;

			case "editor":
			echo "soy el editor";
			break;

			case "otro":
			echo "Soy otro";

		}
	}

	else 
	{
		echo "Error de usuario y contrase";
		echo  $datos['username'];
		
	}*/
			

	}
}

?>