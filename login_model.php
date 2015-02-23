<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class Login_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		
	}

	public function leer()
	{
   		 $this -> db -> select('perfil, username, password');
  		 $this -> db -> from('users');
  		 $this -> db -> where('username', $_POST['user']);
  		 $this -> db -> where('password', $_POST['pass']);
  		 $this -> db -> limit(1);
 
   		$query = $this -> db -> get();
 	
   if( $query -> num_rows() == 1)
   {
     return $query-> result();
   }
   else
   {
     return false;
   }

	}
}

?>