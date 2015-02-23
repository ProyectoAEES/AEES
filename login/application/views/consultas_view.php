<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?= $titulo?></title>
<link  href="plantilla/front/css/estilo.css"  rel="stylesheet"/>
<script type="text/javascript" src="plantilla/front/js/funciones.js"></script>
</head>

<body>
	<!--  Este ejemplo se hace una consulta a la base de datos me trae los datos de la tabla usuarios-->
	<form name = "form">
		<input type = "text" name="nombre"> <br>
		<input type = "text" name="correo"><br>
		<input type="submit" name="submit">
	</form>

	<?=  form_open(base_url().'index.php/formulario/validar',array('name'=>'mi form','id'=>'form'))?> 
	<?= form_close()?>
	<h1> Mis noticias</h1>
	<?php foreach ($usuario as $fila):?>
	<p><?= $fila['nombre'];?></p>
	<p>	<?= $fila['correo'];?></p>
	<br>
	<?php endforeach;?>
</body>
</html>