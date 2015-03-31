<html>
 <?php echo $map['js']; ?>
<meta charset="utf-8">
<title>Mapa</title>
<style type="text/css">
 #sidebar{
            position: absolute;
            width: 200px;
            height: 590px;
            background: #222;
            color: #fff;
            margin-left: 600px;
            margin-top: -600px;
            border: 5px solid #fff;
        }
</style>
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
    <script type="text/javascript">
    function datos_marker(lat, lng, marker)
    {
     var mi_marker = new google.maps.LatLng(lat, lng);
     map.panTo(mi_marker);
     google.maps.event.trigger(marker, 'click');
    }
    </script>
</head>
    </head>
    <body>
    <!-- NAVEGACION -->
    <nav class="navbar navbar-default" role="navigation"> 
    <div class="container-fluid"> 
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
   <li><a href="mapa_admin"> <span class="glyphicon glyphicon-eye-open"> </span> Monitoreo</a></li>
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
    <br>
     <div  class="container-fluid" style="float:right">
    <ul style="list-style-type:none">
    <li style="list-style-type:none">
    <a href="login/logout_ci"><span class="glyphicon glyphicon-off"></span> Cerrar Sesion </a></li>
    </ul> </div>
    </div>
  </nav>
     
    
    <!-- CONTENEDOR-->
    <div style ="float:left; width:400px; padding:55px; border-color: blue;">
      <h1 align="center" style="color:gray">Registro de Eventos</h1><hr/> <br>
      
       <?php echo form_open('insert_ctrl'); ?>
        <fieldset style="color:blue;">
          <div class="form-group">
        <?php echo form_label('Nombre de Evento:'); ?> <?php echo form_error('dname'); ?><br />
        <?php echo form_input(array('id' => 'dname', 'name' => 'dname','class'=>'form-control')); ?><br />
        <?php echo form_label('Latitud:'); ?> <?php echo form_error('dlatitude'); ?><br />
        <?php echo form_input(array('id' => 'dlatitude', 'name' => 'dlatitude','class'=>'form-control')); ?><br>
        <?php echo form_label('Longitud:'); ?> <?php echo form_error('dlongitude'); ?><br />
        <?php echo form_input(array('id' => 'dlongitude', 'name' => 'dlongitude','class'=>'form-control')); ?><br />
        <?php echo form_label('Descripcion:'); ?> <?php echo form_error('ddescription'); ?><br />
        <?php echo form_textarea(array('id' => 'ddescription', 'name' => 'ddescription','class'=>'form-control')); ?><br />
        <?php echo form_label('Asignacion:'); ?> <?php echo form_error('dasign'); ?><br />
          <select name="dasign" id = "dasign" class='form-control'>
              <option value="1"> --Encargado --</option>
              <?php
                $as = 0;
                foreach ($Nombres as $row) {
                  # code...
                echo '<option  align-text ="center" value="'.$row->Nombre.'">'.$row->Nombre.'</option>';
                $as++;
                }
                ?>
            </select>
         <br>
        <?php echo form_label('Unidad:'); ?> <?php echo form_error('dunit'); ?><br />
        <?php echo form_input(array('id' => 'dunit', 'name' => 'dunit','class'=>'form-control')); ?><br />
        <?php echo form_label('Fecha:'); ?> <?php echo form_error('ddate'); ?><br />
        <input type="date" name="ddate" id="ddate" class= 'form-control'> <br>
        &nbsp; &nbsp; &nbsp; &nbsp;
        <?php echo form_submit(array('id' => 'submit', 'value' => 'Submit', 'class'=>"btn btn-lg btn-info", 'align'=>'center'));?> <br><br>
       <div>
        </fieldset>
       <?php echo form_close(); ?><br/>
      </div>
       <div style ="float:left; width:500px; height:500px; padding:25px; marging:10px;" class="container"> 
        <br><br><br>
        <h1 align="center" style="color:gray">Ubicación del evento</h1><hr/> <br>
    <p><?php echo $map['html']; ?> </p>
</div>
        
    </body>
</html>
