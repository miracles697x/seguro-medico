
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
	$codigo=$_GET['codigo'];
	$username=$_GET['usuario'];
	$info = datoEspe($codigo,$conexion);

date_default_timezone_set('UTC');
date_default_timezone_set("America/La_Paz");
$fecha = date("Y-m-d H:i:s");

$action='Modificar Especialidad';
bitacora($fecha,$action,$username,$conexion);





  require 'navbar.php';
  require 'jsBody.php';
  require 'meta.php';
  require 'contEspe.php';
} else {
  header('Location: '.RUTA.'index.php');
}

 ?>
