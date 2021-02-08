<?php 


    require_once("../functions.php");
	require_once("../admin/config.php");


	$conexion = conexion($bd_config);

	$password = hash('sha512', $_POST['password']);

    $id=$_POST['id'];
    cambiarP($id,$password,$conexion);
	

 ?>