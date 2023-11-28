<!DOCTYPE html>
<html lang="es-ES">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays 1</title>
</head>

<body>
    <h3>Escribe un programa que genere un una tirada de 5 dados, que almacene la tirada en un vector. 
        A continuación que muestre los dados y me diga donde cual es el dado más alto y en que posición se encuentra.</h3>
    
    <?php
    $tirada = [];
    $mayor = 0;
    $posicion = 0;
    for( $i = 0; $i < 5; $i++ ){
        $tirada[$i] = rand(1,6);
        echo "<img src='dados\\$tirada[$i].jpg' alt=''>\n";
        if($mayor<$tirada[$i]){
            $mayor = $tirada[$i];
            $posicion = $i+1;
        } 
    }
     echo "<br><p>El dado más alto es $mayor y está en ". $posicion ."º lugar</p>\n";
    ?>
</body>

</html>
