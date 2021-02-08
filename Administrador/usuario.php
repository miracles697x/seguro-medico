<?php session_start();

require '../admin/config.php';
require '../functions.php';

// comprobar session
if (!isset($_SESSION['usuario'])) {
  header('Location: '.RUTA.'login.php');
}

$conexion = conexion($bd_config);
$admin = iniciarSession('usuarios', $conexion);

if ($admin['tipo_usuario'] == 1) {
  // traer el nombre del usuario
 	$user = iniciarSession('usuarios', $conexion);
 	$datos1 = listaUsuarios($conexion);
 	require 'partes/navbar.php';
  	require 'partes/jsBody.php';
  	include 'partes/meta.php';
  	require 'usuarioS.php';

} else {
  header('Location: '.RUTA.'index.php');
}

 ?>