<?php

class insert_ctrl extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('insert_model');
        $this->load->library('googlemaps');
        $this->load->library('Form_validation');
        $this->load->helper('url');
        $this->load->helper('form');
       
    }

    function index()
    {   
        //Including validation library
        $data = array();
        $data['Nombres'] = $this->insert_model->getNames();
        $config['center'] = '19.45, -70.7'; // lo posiciona en santiago
        $config['zoom'] = 'auto';
        $config['map_type'] = 'ROADMAP';
        $config['map_width'] = '500px';    
        $config['map_height'] = '500px';
        $config['ondblclick'] = 'document.getElementById("dlatitude").value = event.latLng.lat();document.getElementById("dlongitude").value = event.latLng.lng(); createMarker({ map: map, position:event.latLng })';
        $config['onclick']= "google.maps.event.addListener(marker, 'dblclick', function() {
    map.removeOverlay(marker);
});";
        $this->googlemaps->initialize($config);
       // $marker = array(); 

        $this->load->library('form_validation');     
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        $this->form_validation->set_rules('dname', 'Username',  'required');
        $this->form_validation->set_rules('dlatitude', 'Latitud',  'required');
        $this->form_validation->set_rules('dlongitude', 'Longitud', 'required');
        $this->form_validation->set_rules('ddescription', 'Descripcion', 'required');
        $this->form_validation->set_rules('dasign', 'Asignacion', 'required');
        $this->form_validation->set_rules('dunit', 'Unidad', 'required');
        $this->form_validation->set_rules('ddate', 'Fecha', 'required');


        if ($this->form_validation->run() == FALSE)
        {
            $data['Nombres'] = $this->insert_model->getNames();
            $data['map'] = $this->googlemaps->create_map(); // esto
            $this->load->view('insert_view',$data);
        }
        else
        {
         //Setting values for tabel columns
            $val = array(

                        'Nombre' => $this->input->post('dname'),
                        'Latitud' => $this->input->post('dlatitude'),
                        'Longitud' => $this->input->post('dlongitude'),
                        'Descripcion' => $this->input->post('ddescription'),
                        'Asignacion' => $this->input->post('dasign'),
                        'Unidad' => $this->input->post('dunit'),
                        'Fecha' => $this->input->post('ddate')
                    );
                   // $data['Nombres'] = $this->insert_model->getNames();
                      $data['Nombres'] = $this->insert_model->getNames();
                    $data['map'] = $this->googlemaps->create_map(); // esto
                    $this->insert_model->form_insert($val);
                    $this->load->view('insert_view',$data);
                   }
    }
}

?>