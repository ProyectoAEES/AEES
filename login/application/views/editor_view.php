<!DOCTYPE html>
	<html lang="es">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link rel="stylesheet" type="text/css" href="<?=base_url()?>css/960.css" media="screen" />
        
		 <link rel="stylesheet" type="text/css" href="<?=base_url()?>css/reset.css" media="screen" />
		 <script src="http://code.jquery.com/jquery-1.8.3.js"></script>
         
         <link href='http://fonts.googleapis.com/css?family=Marcellus' rel='stylesheet' type='text/css'/>
       <link  rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css" />
        <meta name="viewport" content="width=device-width, user-scalable=no">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Hoja de estilos del proyecto -->
        <link rel="stylesheet" href="login/css/proyecto.css" type="text/css">
         
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
<!-- JQuery-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- Optional theme --> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	</head>
	<body>
    
     <!-- Barra de navegacion -->
    <nav class="navbar navbar-default" role="navigation"> 
    <div class="container-fluid" style="float:left"> 
    <div class="navbar-header"> 
    <button  type="button" class=" navbar-toggle" data-toggle= "collapse" data-target="#a"> 
    <span class="sr-only"> Adverse Events Emergency System </span>
    <span class="icon-bar"> </span>
    <span class="icon-bar"> </span>
    <span class="icon-bar"> </span>
   </button>
   <a href="#" class="navbar-brand"></a>
   <div class="collapse navbar-collapse" id="a">
   <ul class="nav navbar-nav"> 
   <li><a href="mapa_editor"> <span class="glyphicon glyphicon-eye-open"> </span> Monitoreo</a></li>
   <li class="dropdown">
   <a  href="#" class="dropdown-toggle" data-toggle="dropdown">
   <b class="glyphicon glyphicon-list-alt"></b> Formularios <b class="caret"></b></a>
   <ul class="dropdown-menu" role="menu">
   <li><a href="#"> Form 201</a></li>
   <li><a href="#"> Form 202</a></li>
   <li><a href="#"> Form 203</a></li>
   </ul>
   </li>
   </ul>
    </div>
    </div>
    </div>
    <br>
    <div  class="container-fluid" style="float:right">
    <ul style="list-style-type:none">
    <li style="list-style-type:none">
    <a href="login/logout_ci"><span class="glyphicon glyphicon-off"></span> Cerrar Sesion </a></li>
    </ul> </div>
    </nav>
    
    <div class="clearfix"></div>
    <!--CONTENEDOR -->
		<div class="container_12">
			<div class="grid_12">
				<h1 style="text-align: center">Bienvenido <?=$this->session->userdata('username')?></h1>
				
			</div>
		</div>	
	</body>
</html>