<?php

class insert_ctrl extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('insert_model');
       
    }

    function index()
	{   
		//Including validation library
		$this->load->library('form_validation');
                
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		
		//Validating Name Field
		$this->form_validation->set_rules('dname', 'Username',  'required|min_length[5]|max_length[15]');
		
		//Validating Email Field
		$this->form_validation->set_rules('dlatitude', 'Latitud',  'required');
		
		//Validating Mobile no. Field
		$this->form_validation->set_rules('dlongitude', 'Longitud', 'required');
		
		//Validating Address Field
		$this->form_validation->set_rules('ddescription', 'Descripcion', 'required|min_length[10]|max_length[250]');

		$this->form_validation->set_rules('dasign', 'Asignacion', 'required|min_length[5]|max_length[20]');

		$this->form_validation->set_rules('dunit', 'Unidad', 'required|min_length[5]|max_length[20]');

		$this->form_validation->set_rules('ddate', 'Fecha', 'required');


		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('insert_view');
		}
		else
		{
			//Setting values for tabel columns
			$data = array(

                        'Nombre' => $this->input->post('dname'),
                        'Latitud' => $this->input->post('dlatitude'),
                        'Longitud' => $this->input->post('dlongitude'),
                        'Descripcion' => $this->input->post('ddescription'),
                        'Asignacion' => $this->input->post('dasign'),
                        'Unidad' => $this->input->post('dunit'),
                        'Fecha' => $this->input->post('ddate')
                    );
					
					//Transfering data to Model
                    $this->insert_model->form_insert($data);
					
                    //Loading View
					$this->load->view('insert_view');
                   }
	}
}

?>