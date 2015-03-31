<?php
/**
* 
*/
class Consultas_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function get_datos()
	{

		//con esto acemos una consulta de la base de datos
       $consulta = $this->db->query("SELECT * FROM usuarios");
       return $consulta->result_array();
	}

	public function add_datos()
	{
		$consulta = $this->db->query("INSERT into usuarios values (".$this->input->post("nombre").")");
		return $consulta->result_array();
	}
}
?>