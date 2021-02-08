<?php

	require_once("../functions.php");
	require_once("../admin/config.php");
	$conexion = conexion($bd_config);

$dia=$_POST['dia'];
$hora1=$_POST['hora1'].':00';
$hora2=$_POST['hora2'].':00';
$idM=$_POST['idM'];
$id=$_POST['idM'];

if($dia==''){
	 header("location: ../_admin/Asignar.php?id=$id");     
	   

        }else{
			
  agregarH($dia,$hora1,$hora2,$idM,$conexion);
 header("location: ../_admin/Asignar.php?id=$id");        	
        }

?>