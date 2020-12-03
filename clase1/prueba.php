<?php 
error_reporting(E_ALL);
ini_set('display_errors', '1');
    include("dll/config.php");
    include("dll/class_mysqli_7.php");
 $conn = new clase_mysqli7;
 $conn -> conectar(DBHOST, DBUSER, DBPASS, DBNAME);
 $conn->consulta("select * from usuario");
 $conn->verconsulta();
 ?>
