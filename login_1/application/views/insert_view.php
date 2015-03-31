<html>
    <head>
        <title>Registro de Eventos</title>
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
    <!-- NAVEGACION -->
    <nav class="navbar navbar-default" role="navigation"> 
    <div class="container-fluid"> 
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
    
    <!-- CONTENEDOR-->
    <div class="container" style="float:right"> 
    <div>
    
    </div>
    </div>
    
        <div id="container">
        <br>
         <h1 align="center">Registro de Eventos</h1>
         <hr/> 
        <div class="form-group" align="center">
        <?php echo form_open('insert_ctrl'); ?>
        <br>
  
        <?php echo form_label('Nombre de Evento:'); ?> <?php echo form_error('dname'); ?><br />
        
        <?php echo form_input(array('id' => 'dname', 'name' => 'dname')); ?><br />

        <?php echo form_label('Latitud:'); ?> <?php echo form_error('dlatitude'); ?><br />
        <?php echo form_input(array('id' => 'dlatitude', 'name' => 'dlatitude')); ?><br />

        <?php echo form_label('Longitud:'); ?> <?php echo form_error('dlongitude'); ?><br />
        <?php echo form_input(array('id' => 'dlongitude', 'name' => 'dlongitude')); ?><br />

        <?php echo form_label('Descripcion:'); ?> <?php echo form_error('ddescription'); ?><br />
        <?php echo form_input(array('id' => 'ddescription', 'name' => 'ddescription')); ?><br />
        
        <?php echo form_label('Asignacion:'); ?> <?php echo form_error('dasign'); ?><br />
        <?php echo form_input(array('id' => 'dasign', 'name' => 'dasign')); ?><br />
        
        <?php echo form_label('Unidad:'); ?> <?php echo form_error('dunit'); ?><br />
        <?php echo form_input(array('id' => 'dunit', 'name' => 'dunit')); ?><br />
        
        <?php echo form_label('Fecha:'); ?> <?php echo form_error('ddate'); ?><br />
        <?php echo form_input(array('id' => 'ddate', 'name' => 'ddate')); ?><br />
          <br>
          <button  class="btn btn-lg btn-info" type="submit" id="submit">Submit </button>
 
        
        <?php echo form_close(); ?><br/>
        </div>
        <div id="fugo"> 
        </div>
       </div>
    </body>
</html>
