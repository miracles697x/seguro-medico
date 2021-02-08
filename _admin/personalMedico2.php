<?php session_start();

require '../admin/config.php';
require '../functions.php';

// comprobar session
if (!isset($_SESSION['usuario'])) {
  header('Location: '.RUTA.'login.php');
}

$conexion = conexion($bd_config);
$admin = iniciarSession('usuarios', $conexion);

if ($admin['tipo_usuario'] == 2) {
  // traer el nombre del usuario
 	$user = iniciarSession('usuarios', $conexion);
 	$datos = listaMedicos($conexion);

  require 'navbar.php';
  require 'jsBody.php';
  require 'metadMBD.php';
  require 'listaMedicos.php';
} else {
  header('Location: '.RUTA.'index.php');
}

 ?>
