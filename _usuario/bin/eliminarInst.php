<?php 

require_once("../../functions.php");
require_once("../../admin/config.php");
$conexion = conexion($bd_config);



	$id =$_GET['id'];
	eliminarInst($id,$conexion);
	header('location: ../institucion.php');


 ?>