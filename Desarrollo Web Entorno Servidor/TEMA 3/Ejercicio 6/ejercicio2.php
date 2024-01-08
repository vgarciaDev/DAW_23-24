<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ejercicio 2</title>
  </head>
  <body>
    <h3>
      Hacer un programa con sesiones. <br />
      Queremos un menú con enlaces: <br />
      Elija una opción: <br />
      Escribir su nombre <br />
      Escribir sus apellidos <br />
      Ver su nombre y apellido <br />
      Borrar la información <br />
      Tiene que haber un enlace en cada web para volver al programa principal.
    </h3>
    <?php session_start(); ?>
    <h3>MENÚ:</h3>
    <a href="nombre.php">Escribe tu nombre</a><br><br>
    <a href="apellidos.php">Escribe tus apellidos</a><br><br>
    <a href="ver.php">Ver tu nombre y apellidos</a><br><br>
    <a href="borrar.php">Borrar la información</a><br><br>
  </body>
</html>
