<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ejercicio 2</title>
  </head>
  <body>
    <?php
    $horas = $_REQUEST['horas'];
    $salario = $horas*12;
    print "<h3>Tu salario semanal son: $salario €</h3>";
    ?>
  </body>
</html>
