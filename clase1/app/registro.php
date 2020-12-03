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
        <ul>
            <li><a href="app/login.php">Iniciar Sesion</a></li>
        </ul>
    </header>
    <nav class="menuPrincipal">
        <br>
        <a href="../index.html">Inicio</a>
        <a href="../internas/ponentes.html">Simposios</a>
        <a href="../internas/campus.html">Campus</a>
        <a href="../internas/tarifas.html">Tarifas</a>
        <a href="../app/registro.php">Registro</a>
        <a href="../internas/contactos.html">Contáctos</a>
        <br>
    </nav>
    <main>
        <div class="container">
        <form  action="guardardatos.php" method="post">
            <div class="row">
            <div class="col-25">
            <label for="nombre">Nombres</label>
            </div>
            <div class="col-75">
            <input name="nombre" type="text" id="nombre"  placeholder="Tu nombre..">
            </div>
            </div>
            <div class="row">
            <div class="col-25">
            <label for="profesion">Profesion</label>
            </div>
            <div class="col-75">
            <input type="text" id="profesion" name="profesion" placeholder="Tu profesion..">
            </div>
            </div>
            <div class="row">
            <div class="col-25">
            <label for="pais">Pais</label>
            </div>
            <div class="col-75">
            <select id="pais" name="pais">
            <option value="australia">Australia</option>
            <option value="canada">Canada</option>
            <option value="usa">USA</option>
            </select>
            </div>
            </div>
            <div class="row">
            <div class="col-25">
            <label for="ciudad">Ciudad</label>
            </div>
            <div class="col-75">
            <input type="text" id="ciudad" name="ciudad" placeholder="Tu ciudad..">
            </div>
            </div>
            <div class="row">
            <div class="col-25">
            <label for="correo">Correo</label>
            </div>
            <div class="col-75">
            <input type="text" id="correo" name="correo" placeholder="Tu correo..">
            </div>
            </div>
            <div class="row">
            <div class="col-25">
            <label for="dni">DNI</label>
            </div>
            <div class="col-75">
            <input type="text" id="dni" name="dni" placeholder="Tu dni..">
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