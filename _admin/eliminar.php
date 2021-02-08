<?php 
		require_once("../functions.php");
		require_once("../admin/config.php");
		$conexion = conexion($bd_config);


		date_default_timezone_set('UTC');
		date_default_timezone_set("America/La_Paz");
		$fecha = date("Y-m-d H:i:s");
		$user= $_GET['usuario'];
		$action='Eliminar Medico';
		bitacora($fecha,$action,$user,$conexion);

		$id = $_GET['id'];

		eliminarMedico($id,$conexion);
?>