<?php
	require_once("../functions.php");
	require_once("../admin/config.php");
	$conexion = conexion($bd_config);
    $id = $_POST['idM'];
    $codigo =$_POST['especia'];
    especiM($id,$codigo,$conexion);
  
?>