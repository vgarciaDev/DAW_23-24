<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <?php
    $num1 = $_REQUEST['num1'];
    $num2 = $_REQUEST['num2'];
    $operacion = $_REQUEST['operacion'];
    if($operacion == 's'){
        $suma = $num1+$num2;
        print "El resultado de realizar <b>la suma</b> de los números $num1 y $num2 es $suma";
    } else if($operacion == 'r'){
        $resta = $num1-$num2;
        print "El resultado de realizar <b>la resta</b> de los números $num1 y $num2 es $resta";
    } else if($operacion == 'p'){
        $multiplicacion = $num1*$num2;
        print "El resultado de realizar <b>el producto</b> de los números $num1 y $num2 es $multiplicacion";
    } else if($operacion == 'c'){
        $division = $num1/$num2;
        print "El resultado de realizar <b>el cociente</b> de los números $num1 y $num2 es $division";
    }
    ?>
</body>
</html>