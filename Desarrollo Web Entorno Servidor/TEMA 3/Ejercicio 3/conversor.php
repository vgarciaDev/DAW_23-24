<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ejercicio 3</title>
  </head>
  <body>
    <?php
    $kb = $_REQUEST['kb'];
    $mb = 1024;
    $convertir = number_format($kb/$mb, 2);
    print "<h3>$kb Kb son $convertir Mb";
    ?>
  </body>
</html>
