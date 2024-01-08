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
    $_SESSION["apellidos"] = $_REQUEST["apellidos"];

    if(!isset($_REQUEST["apellidos"])){
        ?>
        <form action="#">
            <label for="apellidos">Escribe tus apellidos: </label><br><br>
            <input type="text" name="apellidos"><br><br>
            <button type="submit">Enviar</button><br><br>
        </form>
        <?php
    } 
    ?>
    <a href="ejercicio6.php">Volver al menú</a>
    
  </body>
</html>