<!DOCTYPE html>
<html lang="es-ES">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números y colores</title>
    <style>
        .pares{
            color: blue;
        }
        .impares{
            color: red;
        }
    </style>
</head>

<body>
    <h3>Realiza un programa que generé 8 números aletorios, los almacene en un vector y que luego muestre esos números de colores, 
        los pares en color azul y los impares en color rojo.</h3>
    
    <?php
    $array = [];
    for ($i = 0; $i < 8; $i++) {
        $array[$i] = rand(1,100);
        if($array[$i]%2 == 0) {
            echo "<p class='pares'>$array[$i]</p>\n";
        } else{
            echo "<p class='impares'>$array[$i]</p>\n";
        }
    }
    ?>
</body>

</html>
