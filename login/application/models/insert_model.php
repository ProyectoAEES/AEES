<?php

class insert_model extends CI_Model{
    function __construct() 
    {
        parent::__construct();
    }
    
 function form_insert($data)
 {
 //Inserting in Table(students) of Database(college) 
       $this->db->insert('eventos', $data);  
	   echo "<script>alert('Evento Registrado!');</script>";
    }    

  function getNames()
    {
      $query = $this->db->query('SELECT Nombre FROM personas');
      return $query->result();
    }
}
?>