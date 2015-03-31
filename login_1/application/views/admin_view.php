<!DOCTYPE html>
	<html lang="es">
	<head>
    <meta name="viewport" content="width=device-width, user-scalable=no">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Hoja de estilos del proyecto -->
        <link rel="stylesheet" href="login/css/proyecto.css" type="text/css">
         <link rel="stylesheet" type="text/css" href="<?=base_url()?>css/proyecto.css" media="screen" />
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
<!-- JQuery-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- Optional theme --> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>
	<body style="background:url(css/images/poly-bg-8.jpg)">
    
    <!-- Barra de navegacion -->
    <nav class="navbar navbar-default" role="navigation"> 
    <div class="container-fluid" style="float:left"> 
    <div class="navbar-header"> 
    <button  type="button" class=" navbar-toggle" data-togle= "colapse" data-target="#a"> 
    <span class="sr-only"> Adverse Events Emergency System </span>
    <span class="icon-bar"> </span>
    <span class="icon-bar"> </span>
    <span class="icon-bar"> </span>
   </button>
   <a href="#" class="navbar-brand"></a>
   <div class="collapse navbar-collapse">
   <ul class="nav navbar-nav"> 
   <li><a href="mapa"> <span class="glyphicon glyphicon-eye-open"> </span> Monitoreo</a></li>
   <li class="dropdown">
   <a  href="#" class="dropdown-toggle" data-toggle="dropdown">
   <b class="glyphicon glyphicon-list-alt"></b> Formularios <b class="caret"></b></a>
   <ul class="dropdown-menu" role="menu">
   <li><a href="#"> Form 201</a></li>
   <li><a href="#"> Form 202</a></li>
   <li><a href="#"> Form 203</a></li>
   </ul>
   </li>
   <li><a href="insert_ctrl"><span class="glyphicon glyphicon-fire"></span> Eventos</a></li>
   <li> <a href="#"> <span class="glyphicon glyphicon-stats"></span> Estadisticas</a></li>
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
    <!-- CONTENEDOR -->
		<div class="container_12">
			<div class="grid_12">
			  <h1  class="bg-info  text-center">Bienvenido <?=$this->session->userdata('username')?></h1> 
			</div>
            <div  class="container"> </div>
             <div  align="center">
             </div>
		</div>	
	</body>
</html>