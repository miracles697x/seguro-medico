<?php
require_once("../functions.php");
	require_once("../admin/config.php");
	$conexion = conexion($bd_config);

	$id = $_GET['id'];
    $idM=$_GET['idM']; 
   	
   	eliminarEM2($id,$conexion);
    header("location: ../_admin/Asignar.php?id=$idM");
?>