<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clase 1 de Ing. Web</title>
    <link rel="stylesheet" href="../css/estilos.css">
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
        <a href="registro.php">Registro</a>
        <a href="../internas/contactos.html">Contáctos</a>
    </nav>
    <main>
        <div class="container">
        <form action="guardardatos.php">
        <div class="row">
        <div class="col-25">
        <label for="fname">First Name</label>
        </div>
        <div class="col-75">
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
        </div>
        </div>
        <div class="row">
        <div class="col-25">
        <label for="lname">Last Name</label>
        </div>
        <div class="col-75">
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
        </div>
        </div>
        <div class="row">
        <div class="col-25">
        <label for="country">Country</label>
        </div>
        <div class="col-75">
        <select id="country" name="country">
        <option value="australia">Australia</option>
        <option value="canada">Canada</option>
        <option value="usa">USA</option>
        </select>
        </div>
        </div>
        <div class="row">
        <div class="col-25">
        <label for="subject">Subject</label>
        </div>
        <div class="col-75">
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
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