<?php 
	require_once("../bin/clases.php"); 
	require_once("../bin/config.php");
	$id = $_GET['id'];
	$datoDelete = new Medicos();
	$datosDelete = $datoDelete->datoMedico($id);
?>