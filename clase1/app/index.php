<?php 
    include("dll/config.php");
    include("dll/class_mysqli_7.php");
 $conn = new clase_mysqli7;
 $conn->consulta("select * from usuarios");
 $conn->verconsulta();
 ?>
