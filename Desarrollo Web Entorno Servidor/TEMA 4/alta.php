<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Nuevo Contacto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <style>
      a {
        text-decoration: none;
        color: black;
      }
      a:hover {
        color: rgb(75, 75, 75);
      }
    </style>
  </head>
  <body style="background-color: rgb(216, 216, 216)">
    <div class="container">
      <h1 class="mt-3">Nuevo Contacto</h1>
      <form action="alta.php" method="POST">
        <label class="form-label" for="nombre">Nombre</label>
        <input class="form-control" type="text" name="nombre" id="nombre" style="width: 30%" />
        <label class="form-label" for="apellido1">Primer Apellido</label>
        <input class="form-control" type="text" name="apellido1" id="apellido1" style="width: 30%" />
        <label class="form-label" for="apellido2">Segundo Apellido</label>
        <input class="form-control" type="text" name="apellido2" id="apellido2" style="width: 30%" />
        <label class="form-label" for="telefono">Teléfono</label>
        <input class="form-control" type="tel" name="telefono" id="telefono" style="width: 30%" />
        <label class="form-label" for="email">Email</label>
        <input class="form-control" type="text" name="email" id="email" style="width: 30%" /><br />
        <button type="submit" class="btn btn-primary">Enviar</button>
      </form>
      
    
    <?php
      if(isset($_REQUEST["nombre"]) && isset($_REQUEST["apellido1"]) && isset($_REQUEST["apellido2"]) && isset($_REQUEST["telefono"]) && isset($_REQUEST["email"])){
        $nombre = $_REQUEST["nombre"];
        $apellido1 = $_REQUEST["apellido1"];
        $apellido2 = $_REQUEST["apellido2"];
        $telefono = $_REQUEST["telefono"];
        $email = $_REQUEST["email"];
        $fich = fopen("contactos.txt", "a");
        fwrite($fich, $nombre . "," . $apellido1 . "," . $apellido2 . "," . $telefono . "," . $email . PHP_EOL);
        print "<p>Contacto Guardado</p>";
        fclose($fich); 
      } 
      
    ?>

    <div class="enlaces">
      <h3 class="mt-3">Menú</h2>
      <nav class="navbar">
        <ul class="navbar-nav">
        <li class="nav-item">
            <a href="index.html"> Volver al Inicio</a>
          </li>
          <li class="nav-item">
            <a href="mostrar.php"> Mostrar todos los contactos  </a>
          </li>
          <li class="nav-item">
            <a href="buscar.html"> Buscar contacto </a>
          </li>
        </ul>
      </nav>
    </div>
  </div>
  </body>
</html>
