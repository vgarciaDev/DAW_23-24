<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content = "Víctor García">
    <title>Ejercicio 2 - Unidad 2</title>
</head>
<body>
    <h1>Ejercicio 2</h1>
    <h3>Muestra los números del 320 al 160, contando de 20 en 20 utilizando un bucle for.</h3>
    <?php
        for($i=320; $i>=160; $i-= 20){
            echo "<p>$i</p>\n";
        }
    ?>
</body>
</html>
