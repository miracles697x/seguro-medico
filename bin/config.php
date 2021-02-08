<?php 
	session_start(); 
	$consultaDatos = new Datos();
	$consulta = $consultaDatos->consultarDatos($_SESSION['usuario']);
?>