<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
extract($_POST);
session_start();

$clave=md5($clave);
echo $clave;

include("../dll/config.php");
include("../dll/class_mysqli_7.php");

$miconexion = new clase_mysqli7;
$miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);

$miconexion->consulta("select * from usuario where usuario='$usuario' and contraseña='$clave'");
$listaUser=$miconexion->consulta_lista();

if (!$listaUser[0]) {
	echo '<script>alert("Error de logueo...");</script>';
	echo "<script>location.href='../'</script>";
}else{
	$_SESSION['autentificado'] = TRUE;
    $_SESSION['nombresUser'] = $listaUser[1];
    $_SESSION['rolUser'] = $listaUser[5];
    $_SESSION['local_path'] = $local_path;
    
	echo "<script>location.href='../admin/index.php'</script>";
}


?>