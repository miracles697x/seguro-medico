<?php 
	require_once("../bin/clases.php"); 
	require_once("../functions.php");
	require_once("../admin/config.php");
$conexion = conexion($bd_config);


date_default_timezone_set('UTC');
date_default_timezone_set("America/La_Paz");
$fecha = date("Y-m-d H:i:s");
$user= $_GET['usuario'];
$action='Eliminar Especialidad';
bitacora($fecha,$action,$user,$conexion);



	$id = $_GET['id'];
	$datoDelete = new Especialidad();
	$datosDelete = $datoDelete->eliminarEspecialidad($id);


?>
