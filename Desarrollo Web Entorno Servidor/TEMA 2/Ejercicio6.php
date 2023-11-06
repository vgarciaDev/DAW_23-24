<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content = "Víctor García">
    <title>Ejercicio 6 - Unidad 2</title>
</head>
<body>
    <h1>Ejercicio 6</h1>
    <h3>Un programa que genere 2 tiradas de 3 dados(simulando 2 jugadores). 
Muestre las dos tiradas y me diga cual tiene mayor puntuación(sumando las tiradas)</h3>

    <h3>Jugador 1</h3>
    <?php

    //Jugador 1
    $jugada1 = 0;
    for($i=0; $i<3; $i++){
        $tirada1=rand(1,6);
        $jugada1+=$tirada1;
        print "<img src='dados/$tirada1.jpg' width='100px'>\n";
    }
    echo "<p>Total Tirada: <u><b>$jugada1</u></b></p>\n"; 
    echo "<h3>Jugador 2</h3>\n";

    //Jugador 2
    $jugada2 = 0;
    for($i=0; $i<3; $i++){
        $tirada2=rand(1,6);
        $jugada2+=$tirada2;
        print "<img src='dados/$tirada2.jpg' width='100px'>\n";
    }
    echo "<p>Total Tirada: <u><b>$jugada2</u></b></p>\n";

    //Resultado tiradas
        if($jugada1>$jugada2){
            echo "<h3><mark>El ganador ha sido el Jugador 1</mark></h3>\n";
        } else if($jugada1<$jugada2){
            echo "<h3><mark>El ganador ha sido el Jugador 2</mark></h3>\n";
        } else if ($jugada1==$jugada2){
            echo "<h3><mark>Ha habido un empate entre Jugador 1 y Jugador 2</mark></h3>\n";
        }
    ?>  
    
</body>
</html>
