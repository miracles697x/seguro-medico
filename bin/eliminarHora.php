<?php
	require_once("../functions.php");
	require_once("../admin/config.php");
	$conexion = conexion($bd_config);
    
    $idH = $_GET['id'];
    $id=$_GET['idM']; 
    
   eliminarHoraM($idH,$conexion);

    header("location: ../_admin/Asignar.php?id=$id");
?>