
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
	$id=$_GET['id'];
 	$user = iniciarSession('usuarios', $conexion);
 	$informacion =datoMedico($id,$conexion);
 	


  require 'navbar.php';
  require 'jsBody.php';
  require 'meta.php';
  require 'modMedico.php';
} else {
  header('Location: '.RUTA.'index.php');
}

 ?>