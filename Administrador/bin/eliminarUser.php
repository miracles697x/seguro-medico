<?php 

require_once("../../functions.php");
require_once("../../admin/config.php");
$conexion = conexion($bd_config);



	$id =$_GET['id'];

	eliminarUsuario($id,$conexion);
	header('location: ../usuario.php');


 ?>