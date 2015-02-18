<?php

  // PHP variable to store the host address
 $db_host  = "mysql9.000webhost.com";
 // PHP variable to store the username
 $db_uid  = "a4612749_gedafr";
 // PHP variable to store the password
 $db_pass = "elbolsillo02";
 // PHP variable to store the Database name  
 $db_name  = "a4612749_login"; 
        // PHP variable to store the result of the PHP function 'mysql_connect()' which establishes the PHP & MySQL connection  
 $db_con = mysql_connect($db_host,$db_uid,$db_pass) or die('could not connect');
 mysql_select_db($db_name);
 $sql = "SELECT user,pass FROM usuarios WHERE  user = '$_POST[user]' and pass = '$_POST[pass]'"; /*$_POST[usuario]*/ /*$_POST[password]*/
 $result = mysql_query($sql) or die(mysql_error());
 while($row=mysql_fetch_assoc($result))
  $output[]=$row;
 print(json_encode($output));
 mysql_close(); 

/*
$mysql_host = "mysql9.000webhost.com";
$mysql_database = "a4612749_login";
$mysql_user = "a4612749_gedafr";
$mysql_password = "elbolsillo02";
*/ 
?>

