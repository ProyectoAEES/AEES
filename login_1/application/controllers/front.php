<?php
/**
* 
*/
class Front extends CI_Controller
{
	
	public function __construct()
	{
		parent ::__construct();
	}

	public function index()
	{
		$data = array('titulo'=> 'Bienvenidos');
		$this->load->view('front_view',$data);
	}
}
?>