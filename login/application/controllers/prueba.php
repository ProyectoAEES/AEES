<?php
class Prueba extends CI_Controller
{
	
	function __construct()
	{
		parent ::__construct();
		 $this->load->model('insert_model');
		$this->load->library('googlemaps');
		$this->load->library('Form_validation');
		//$this->load->model('mapa_model');
		$this->load->helper('url');
		$this->load->helper('form');
	}


	public function index()
	{

	    $data = array();
		$config = array(); //arreglo para inicializar el mapa
		//$marker = array();  // arreglo para inicializar los marcadores
		 $config['center'] = '19.45, -70.7'; // lo posiciona en santiago
		  $config['zoom'] = 'auto';
		   $config['map_type'] = 'ROADMAP';
		    $config['map_width'] = '600px';    
		    $config['map_height'] = '600px';
		    $config['onclick'] = 'document.getElementById("dlatitude").value = event.latLng.lat();document.getElementById("dlongitude").value = event.latLng.lng();';
		    $this->googlemaps->initialize($config);

		

		     $datos = array(

                        'Nombre' => $this->input->post('dname'),
                        'Latitud' => $this->input->post('dlatitude'),
                        'Longitud' => $this->input->post('dlongitude'),
                        'Descripcion' => $this->input->post('ddescription'),
                        'Asignacion' => $this->input->post('dasign'),
                        'Unidad' => $this->input->post('dunit'),
                        'Fecha' => $this->input->post('ddate')
                    );
		     			$data['Nombres'] = $this->insert_model->getNames();
		     			$this->insert_model->form_insert($datos);
						$data['map'] = $this->googlemaps->create_map(); // esto 
						$this->load->view('prueba_view', $data);
						echo "<script> alert('está mandando los datos');</script>";
		
	}
}
?>