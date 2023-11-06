<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content = "Víctor García">
    <title>Ejercicio 4 - Unidad 2</title>
</head>
<body>
    <h1>Ejercicio 4</h1>
    <h3>Realiza un programa que nos diga cuántos dígitos tiene un número aleatorio entre (0 y 9999). Mostrar el número y la cantidad de dígitos.</h3>
    <?php

    //Forma corta
    $aleatorio = rand(0,9999);  //Número aleatorio
    $contador = strlen((string)$aleatorio); //Pasamos el número a string (casting) y hacemos la función strlen() para contar los caracteres del string
    echo "<p>Número aleatorio: $aleatorio</p>\n";
    echo "<p>Número de dígitos: $contador</p>\n";

    //Forma larga
    $aleatorio2 = rand(0,9999); //Número aleatorio
    $contador2 = 0; //El contador se inicializa en 0
    echo "<p>Número aleatorio 2: $aleatorio2</p>\n";
    if($aleatorio2==0){ //Si por casualidad sale 0 tiene que contarlo como 1 dígito, si no el contador sería 0
        $contador2=1;
    }else{
        while($aleatorio2!=0){ 
            $aleatorio2=(int)($aleatorio2/10); //Al hacer la división hay que indicarle que queremos un integer, porque si no te lo pasa a double.
            $contador2++; //El contador va sumando con cada iteración
        }
    }
    echo "<p>Número de dígitos 2: $contador2</p>\n";
    ?>
</body>
</html>
