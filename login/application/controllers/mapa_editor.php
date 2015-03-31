<?php 
class Mapa_editor extends CI_Controller
{
	
	function __construct()
	{
		parent ::__construct();
		$this->load->library('googlemaps');
		$this->load->library('Form_validation');
		$this->load->model('mapa_model');
		$this->load->helper('url');
		$this->load->helper('form');
	}


	public function index()
	{
		$config = array(); //arreglo para inicializar el mapa
		$marker = array();  // arreglo para inicializar los marcadores
		 $config['center'] = '19.45, -70.7'; // lo posiciona en santiago
		  $config['zoom'] = 'auto';
		   $config['map_type'] = 'ROADMAP';
		    $config['map_width'] = '700px';    
		    $config['map_height'] = '600px';
		   //$config['onclick'] = 'createMarker({ map: map, position:event.latLng })';
		    $this->googlemaps->initialize($config);
		    $markers = $this->mapa_model->get_markers();
        foreach($markers as $info_marker)
        {
            $marker = array();
            $marker ['animation'] = 'DROP';
            $marker ['position'] = $info_marker->Latitud.','.$info_marker->Longitud;   
            $marker ['infowindow_content'] =$info_marker->Nombre.'<br>'.$info_marker->Asignacion.'<br>'.$info_marker->Latitud.'<br>'.$info_marker->Longitud;
            $maker['title'] = $info_marker->Nombre;
            $marker['id'] = $info_marker->id; 
            $this->googlemaps->add_marker($marker);
        }
		  
		$data['datos'] = $this->mapa_model->get_markers();
		$data['map'] = $this->googlemaps->create_map();
		$this->load->view('mapa_editor_view', $data);
		
	}
}
?>