<!doctype html>
<html>
<head>
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
<body>
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
   <div style ="float:left; width:300px; padding:55px" >
    <h1 align="center" style="color:gray"> Registrar Evento</h1><hr>
    <form action="prueba/index" method="post"> 
      <fieldset  style="color:blue;">
        <div class="form-group">
          <label for="dname" align="center"> Nombre del Evento</label><br>
          <input type="text" id="dname" name="dname" class="form-control"  required>
         </div>
         <div class="form-group">
          <label for="dlatitud">Latitud</label><br>
          <input type="text" id="dlatitude" name="dlatitude" class="form-control" required>
         </div>
         <div class="form-group">
          <label for="dlongitude">Longitud</label><br>
          <input type="text" id="dlongitude" name="dlongitude" class="form-control"  required>
         </div>
         <div class="form-group">
          <label for="ddescription">Descripcion</label><br>
          <input type="text" id="ddescription" name="ddescription" class="form-control"  required>
         </div>
         <div class="form-group">
          <label for="dasing">Asignación</label><br>
          <select name="dasign" id = "dasign" class="form-control">
              <option value="1"> --Encargado --</option>
              <?php
                $as = 0;
                foreach ($Nombres as $row) {
                  # code...
                echo '<option value="'.$row->Nombre.'">'.$row->Nombre.'</option>';
                $as++;
                }
                ?>
            </select>
         </div>
          <div class="form-group">
          <label for="dunit">Unidad</label><br>
          <input type="text" id="dunit" name="dunit" class="form-control"  required>
         </div>
          <div class="form-group">
          <label for="ddate">Fecha</label><br>
          <input type="date" id="ddate" name="ddate" class="form-control"  required>
      </fieldset>
       </div>
         <div align="center" style="">
        <input  align-text="justify" align="center" type="submit" id="submit" name ="submit" value="Registrar Evento" class="btn btn-lg btn-info">
      </div>
    </form>
   </div>
  <div style ="float:right; width:500px; height:500px; padding:25px; marging:10px;" class="container"> 
    <p> <?php echo $map['html']; ?> </p>
</div> 
</body>
</html>