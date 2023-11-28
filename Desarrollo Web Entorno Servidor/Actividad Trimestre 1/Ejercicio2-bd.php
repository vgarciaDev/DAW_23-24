<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Víctor García García">
    <title>Tirada de dados</title>
</head>
<body>
    <h3>El objetivo de este ejercicio es crear un programa en PHP que simule un juego de dados para dos jugadores. 
        En lugar de un dado, cada jugador lanzará 5 dados y se almacenarán los resultados en dos matrices. 
        Después de cada tirada, el programa determinará quién gana según las reglas del juego y mostrará el resultado.</h3>
    
    <?php
    $jugador1 = [];
    $jugador2 = [];

    //CONECTAMOS A LA BBDD Y CREAMOS LAS QUERYS
    $mysqli_conection = mysqli_connect("localhost", "root", "", "juegoDados");
    $query1 = "UPDATE puntuacion SET puntuacion = puntuacion + 1 WHERE jugador = 'Jugador 1'";
    $query2 = "UPDATE puntuacion SET puntuacion = puntuacion + 1 WHERE jugador = 'Jugador 2'";
    $query3 = "SELECT puntuacion FROM `puntuacion` WHERE jugador = 'Jugador 1'";
    $query4 = "SELECT puntuacion FROM `puntuacion` WHERE jugador = 'Jugador 2'";
    
    $puntuacion1 = $mysqli_conection->query($query3);
    $puntuacion2 = $mysqli_conection->query($query4);
    
    echo "<h2>Jugador 1</h2>\n";
    for( $i = 0; $i < 5; $i++ ) {
        $jugador1[$i] = rand(1,6);
        print "<img src='dados/$jugador1[$i].jpg'>\n";
    }

    echo "<h2>Jugador 2</h2>\n";
    for( $i = 0; $i < 5; $i++ ){
        $jugador2[$i] = rand(1,6);
        print "<img src='dados/$jugador2[$i].jpg'>\n";
    }
    
    echo "<h2>Resultado</h2>\n";
    if(array_sum($jugador1) == array_sum($jugador2) ){
        echo "<h4>Hay un empate entre Jugador 1 y Jugador 2</h4>\n";
    } else if(array_sum($jugador1) > array_sum($jugador2) ){
        echo "<h4>Gana el Jugador 1</h4>\n";
        //SI GANA J1 SE HACE UPDATE EN LA BBDD
        $mysqli_conection->query($query1);
    } else if(array_sum($jugador1) < array_sum($jugador2) ){
        echo "<h4>Gana el Jugador 2</h4>\n";
        //SI GANA J2 SE HACE UPDATE EN LA BBDD
        $mysqli_conection->query($query2);
    }
    
    echo "<h2>Registro de partidas</h2>\n";
    //Si $row tiene un registro de la tabla, entonces el bucle continúa.
    while($row = $puntuacion1->fetch_array()) { //se puede hacer con fetch_array()
        echo "<h4>Partidas Ganadas Jugador 1: " . $row["puntuacion"]."</h4>"; //y hay que llamarlo así
    }
    while($row = $puntuacion2->fetch_object()) { //se puede hacer con fetch_object()
        echo "<h4>Partidas Ganadas Jugador 2: " . $row->puntuacion."</h4>";  //y hay que llamarlo así
    }

     $mysqli_conection->close();
    ?>
</body>
</html>