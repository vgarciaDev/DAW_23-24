<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Víctor García García">
    <title>Dibujar Rectángulos</title>
</head>
<body>
    <h3>Realizar un programa PHP que generé 2 números aleatorios (entre 5 y 15) y me dibujé un rectángulo de asteriscos </h3>
    <?php
    $base = rand(5, 15);
    $altura = rand(5, 15);
    print "<h4>Base: $base</h4>\n";
    print "<h4>Altura: $altura</h4>\n";
    for( $i = 0; $i < $altura; $i++ ) {
        for($k = 0; $k < $base; $k++ ){
            echo "*";
        }
        print "<br>\n";
    }

    ?>
</body>
</html>