<?php
require_once("../../functions.php");
require_once("../../admin/config.php");
$conexion = conexion($bd_config);



	$id =$_POST['id'];
	$descripcion=$_POST['descripcion'];
	$descripcion = strtoupper($descripcion);
	$NIT=$_POST['nit'];
	$Domi=$_POST['domi'];
	subirInst($id,$descripcion,$NIT,$Domi,$conexion);
	header('location: ../institucion.php');
?>