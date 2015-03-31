<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Formularios</title>
</head>

<body>
	<h1> Mi <? echo $Titulo ?> </h1>
	<?php echo validation_errors(); ?>

	<?=  form_open(base_url().'index.php/formulario/validar',array('name'=>'mi form','id'=>'form'))?>

	<?= form_label('Nombre','Nombre', array('class'=>'label'))?>
	<?= form_input('nombre','','class="input"');?> <br>
	<?= form_label('Password','', array('class'=>'label'))?>
	<?=form_password('pass','','class="password"'); ?>
	<br>
	Futbol <?= form_checkbox('deporte[]','futboll',false, 'class="check"') ?>
	Volley <?= form_checkbox('deporte[]','Volley',true, 'class="check"') ?>
	<br>
	<?= form_textarea('mensaje','', 'class="textarea" row = "25px"')?>
	<br>
	Masculino<?= form_radio('sexo','M',false,'class="radio"')?>
	Femenino<?= form_radio('sexo','F',false,'class="radio"')?>
	<br>
	<?= form_button('boton','Titulo boton','class="button"')?>
	<br>
	<?=form_hidden('oculto','valor oculto') ?>
	<?= form_dropdown('seleccion',array("val1"=> "Hola", "val2"=>"Adios")) ?>
	<br>
	<?= form_multiselect('multi',array("saludo"=>"Hola", "despedida"=> "adios")) ?>
	<br> 
	<?= form_submit('submit','Enviar','class="submit"')?>
	<?=  form_close()?>  <!--para cerrar el formulario -->
</body>
</html>
