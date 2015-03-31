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
	
	<div align="center"> 
	<p> <?php echo $map['html']; ?> </p>
	<!--<p> <?php echo $this->googlemaps->output();?> </p> -->
</div>
<div id="sidebar">
    <ul>
        <?php
        foreach($datos as $marker_sidebar)
        {
            ?><li onclick="datos_marker(<?=$marker_sidebar->Longitud?>,<?=$marker_sidebar->Latitud?>,marker_<?=$marker_sidebar->id?>)">
            <?=$marker_sidebar->id;?>&nbsp;&nbsp;<?=substr($marker_sidebar->Asignacion)?></li><?php
        }
        ?>
    </ul>
</div>
</body>
</html>
