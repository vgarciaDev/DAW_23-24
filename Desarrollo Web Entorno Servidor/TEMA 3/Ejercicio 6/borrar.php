<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ejercicio 2</title>
  </head>
  <body>
    <?php 
        session_start(); 

        if(isset($_SESSION["nombre"]) || isset($_SESSION["apellidos"])){
        unset($_SESSION["nombre"]);
        unset($_SESSION["apellidos"]);
        print "<p>Información borrada correctamente</p><br><br>";
        } else{
            print "<p>No hay información que borrar</p><br><br>";
        }
        session_destroy();
    ?>
    <a href="ejercicio6.php">Volver al menú</a>
  </body>
</html>