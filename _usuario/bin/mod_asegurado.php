<?php
	require_once("../../functions.php");
	require_once("../../admin/config.php");
	$conexion = conexion($bd_config);
    


    $id =$_POST['id'];
    $nombres=$_POST['nombre'];
    $ap=$_POST['ap'];
    $am=$_POST['am'];
    $fecha=$_POST['fecha'];
    $imagen=$_FILES;
	$codigo=$_POST['codigo'];
	$institucion=$_POST['institucion'];
	$tipoA = $_POST['tipoAseg'];
	$ci=$_POST['ci'];
	$domicilio=$_POST['domicilio'];
	$inivigencia=$_POST['inivigencia'];
	$finvigencia=$_POST['finvigencia'];



	modificarAsegurado($id,$nombres,$ap,$am,$fecha,$imagen,$codigo,$institucion,$ci,$domicilio,$inivigencia,$finvigencia,$tipoA,$conexion);
	header('location: ../asegurado.php');
?>
    
