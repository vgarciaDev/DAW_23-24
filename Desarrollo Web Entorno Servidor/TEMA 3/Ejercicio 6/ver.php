<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ejercicio 2</title>
  </head>
  <body>
    <?php 
    error_reporting(0);
    session_start(); 

    
    if (isset($_SESSION["nombre"]) && isset($_SESSION["apellidos"])) {
        print "<p><b>Nombre: </b>".$_SESSION["nombre"] ."</p><p><b>Apellidos: </b>". $_SESSION["apellidos"] ."</p>";
    } else if(!isset($_SESSION["nombre"]) && !isset($_SESSION["apellidos"])){
        print "<p>No se ha introducido aún tu nombre ni tus apellidos</p><br><br>";
    } else if(!isset($_SESSION["apellidos"])){
        print "<p><b>Nombre: </b>".$_SESSION["nombre"] ."</p><p><b>Apellidos:</b> No se han introdución aún tus apellidos</p>";
    } else if(!isset($_SESSION["nombre"])){
        print "<p><b>Nombre: </b> No se han introdución aún tu nombre</p><p><b>Apellidos:</b> ". $_SESSION["apellidos"] ."</p>";
    }
    ?>
    <a href="ejercicio6.php">Volver al menú</a>
    
  </body>
</html>