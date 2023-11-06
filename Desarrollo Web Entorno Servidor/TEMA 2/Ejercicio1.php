<!DOCTYPE html>
<html lang="es-ES">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Víctor García">
    <title>Ejercicio 1 - Unidad 2</title>
</head>

<body>
    <h1>Ejercicio 1</h1>
    <h3>Muestra los números múltiplos de 5 de un bucle de 0 a 100 utilizando while.</h3>
    <?php
    $numero = 5;
    while ($numero <= 100) {
        echo "<p>$numero</p>\n";
        $numero += 5;
    }
    ?>
</body>

</html>
