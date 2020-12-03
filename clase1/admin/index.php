<?php
include("seguridad/seguridad.php");
$listaRol[1]="Administrador";
$listaRol[2]="Editor";
echo "Bienvenido: ".$_SESSION['nombresUser'];
echo "<br>ud es un ".$listaRol[$_SESSION['rolUser']];
echo "<a href='seguridad/salir.php?salir=true'>Cerrar sesion</a>";

$sape= "dd";
echo "<br>";
$conn = new clase_mysqli7;
 $conn -> conectar(DBHOST, DBUSER, DBPASS, DBNAME);
 $conn->consulta("select * from inscritos");
 $lista=$conn->consulta_lista();
 echo $conn->numregistros();
 echo $lista[0][1];
 echo $lista[1][1];
  echo $lista[2][1];
 echo $lista[3][1];
 echo $lista[4][1];

?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<center>
        <table class="tabla">
        <?php 
        $i=0;
       // while ($lista[$i][0] <= $conn->numregistros()) {
        //	echo $lista[$i][0];
        //	$i=$i+1;
       // 	        }
         ?>
        </table>
</center>
</body>
</html>