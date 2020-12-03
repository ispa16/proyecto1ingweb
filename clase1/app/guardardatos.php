<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
extract($_POST);

include("../dll/config.php");
include("../dll/class_mysqli_7.php");

$miconexion = new clase_mysqli7;
$miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
$ressql=$miconexion->consulta("insert into inscritos values('0','$nombre','$correo','$dni','$ciudad','$profesion')");
if (!$ressql) {
	echo '<script>alert("Error de regsitro...");</script>';
	echo "<script>location.href='registro.php'</script>";
}else{
	echo '<script>alert("Datos guardados correctamente...");</script>';
	echo "<script>location.href='../'</script>";
}


?>