<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content = "Víctor García">
    <title>Ejercicio 5 - Unidad 2</title>
</head>
<body>
    <h1>Ejercicio 5</h1>
    <h3>Escribe un programa que muestre en tres columnas:  </h3>
    <h3>Numero -  cuadrado del numero - cubo del numero</h3>
    <h3>De 10 números aleatorios entre 5 y 20.</h3>
    <?php
        echo "<table>\n
        <tr>\n
        <th>Número</th>\n
        <th>Cuadrado</th>\n
        <th>Cubo</th>\n
        </tr>\n"; 
        for($i=0; $i<10; $i++){
            $numero = rand(5,20);
            $cuadrado = pow($numero,2); //También se podría hacer $numero**2
            $cubo = pow($numero,3);
            echo "<tr>\n<td>$numero</td>\n<td>$cuadrado</td>\n<td>$cubo</td>\n</tr>\n";
        }
        echo "</table>\n";
    ?>
</body>
</html>
