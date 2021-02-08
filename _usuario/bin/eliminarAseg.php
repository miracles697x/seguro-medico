<?php 

require_once("../../functions.php");
require_once("../../admin/config.php");
$conexion = conexion($bd_config);



	$id =$_GET['id'];
	eliminarAseg($id,$conexion);
	header('location: ../asegurado.php');


 ?>