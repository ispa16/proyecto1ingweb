<?php  
    include("config.php");
?>  

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clase 1 de Ing. Web</title>
    <link rel="stylesheet" href="../css/registro.css">
</head>
<body>
    <header class="cabeceraPrincipal">
        <img class="anime" src="../images/clei-logo.png" alt="Logotipo del evento">
        <h1>V Conferencia de desarrollo de software UTPL 2021</h1>
    </header>
    <nav class="menuPrincipal">
        <a href="../index.html">Inicio</a>
        <a href="../internas/ponentes.html">Ponentes</a>
        <a href="../internas/campus.html">Campus</a>
        <a href="../internas/tarifas.html">Tarifas</a>
        <a href="../registro.php">Registro</a>
        <a href="../internas/contactos.html">Contáctos</a>
    </nav>
    <main>
        <section class="contenedor">
            <h2>Formulario de registro al evento</h2>
        </section>
        <div class="container">
        <form  action="validar.php" method="post">
            <div class="row">
            <div class="col-25">
            <label for="usuario">Usuario</label>
            </div>
            <div class="col-75">
            <input name="usuario" type="text" id="usuario"  placeholder="Tu usuario..">
            </div>
            </div>
            <div class="row">
            <div class="col-25">
            <label for="clave">Clave</label>
            </div>
            <div class="col-75">
            <input type="password" id="clave" name="clave" placeholder="Tu clave..">
            </div>
            </div>
            <div class="row">
            <input type="submit" value="Submit">
            </div>
        </form>
        </div>
    </main>
    
    <footer class="piePagina">
        <h6>Derechos Reservados UTPL 2020 by: @rlramirez</h6>
    </footer>
</body>
</html>