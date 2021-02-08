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
 	$id=$_GET['id'];
 	$datos4 = listaUsuarios2($id,$conexion);

  require 'partes/navbar.php';
  require 'partes/jsBody.php';
  require 'partes/meta.php';
  require 'perfilUser.php';
} else {
  header('Location: '.RUTA.'index.php');
}

 ?>
