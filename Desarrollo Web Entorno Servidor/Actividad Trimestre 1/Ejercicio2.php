<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <h3>El objetivo de este ejercicio es crear un programa en PHP que simule un juego de dados para dos jugadores. En lugar de un dado, cada jugador lanzará 5 dados y se almacenarán los resultados en dos matrices. Después de cada tirada, el programa determinará quién gana según las reglas del juego y mostrará el resultado.</h3>
    <?php
    $jugador1 = tiradaDados();
    $jugador2 = tiradaDados();
    print "<h2>Jugador 1</h2>";
    imprimirDados($jugador1);
    print "<h2>Jugador 2</h2>";
    imprimirDados($jugador2);
    print "<h2>Resultado</h2>";
    resultadoTirada($jugador1, $jugador2);
    

    //FUNCIONES
    function tiradaDados(){
        $jugador = [];
        for( $i = 0; $i < 5; $i++ ){
            $jugador[$i] = rand(1,6);
        }
        return $jugador;
    }
    function imprimirDados($jugador){
        for( $i = 0; $i < 5; $i++ ) {
            print "<img src='dados/$jugador[$i].jpg'>\n";
        }
    }
    function resultadoTirada($jugador1, $jugador2){
        $resultado1 = array_sum($jugador1);
        $resultado2 = array_sum($jugador2);
        if($resultado1 > $resultado2){
            print "<p>Jugador 1: $resultado1</p>\n<p>Jugador 2: $resultado2</p>\n<h3>Ha ganado el jugador 1</h3>";
        } else if($resultado1 < $resultado2){
            print "<p>Jugador 1: $resultado1</p>\n<p>Jugador 2: $resultado2</p>\n<h3>Ha ganado el jugador 2</h3>";
        } else{
            print "<p>Jugador 1: $resultado1</p>\n<p>Jugador 2: $resultado2</p>\n<h3>Ha habido un empate</h3>";
        }
    }
    
    
    ?>
</body>
</html>