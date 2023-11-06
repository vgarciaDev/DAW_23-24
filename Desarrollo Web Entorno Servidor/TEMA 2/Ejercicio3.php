<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content = "Víctor García">
    <title>Ejercicio 3 - Unidad 2</title>
</head>
<body>
    <h1>Ejercicio 3</h1>
    <h3>Muestra la tabla de multiplicar de un número generado de manera aleatoria entre 1 y 10. El resultado en formato table</h3>
    <?php
        echo "<table border='1'>\n
        <tr>\n
        <th>Multiplicación</th>\n
        <th>Resultado</th>\n
        </tr>\n";          
        
        $aleatorio = rand(1,10);
        switch($aleatorio){
            case 1: 
                for($i=0; $i<=10; $i++){
                    $valor = 1*$i;
                    echo "<tr>\n    <td>1 x $i</td>\n   <td>$valor</td>\n</tr>\n";
                }
                break; 
            case 2: 
                for($i=0; $i<=10; $i++){
                    $valor = 2*$i;
                    echo "<tr>\n    <td>2 x $i</td>\n   <td>$valor</td>\n</tr>\n";
                }
                break;
            case 3: 
                for($i=0; $i<=10; $i++){
                    $valor = 3*$i;
                    echo "<tr>\n    <td>3 x $i</td>\n   <td>$valor</td>\n</tr>\n";
                }
                break; 
            case 4: 
                for($i=0; $i<=10; $i++){
                    $valor = 4*$i;
                    echo "<tr>\n    <td>4 x $i</td>\n   <td>$valor</td>\n</tr>\n";
                }
                break; 
            case 5: 
                for($i=0; $i<=10; $i++){
                    $valor = 5*$i;
                    echo "<tr>\n    <td>5 x $i</td>\n   <td>$valor</td>\n</tr>\n";
                }
                break; 
            case 6: 
                for($i=0; $i<=10; $i++){
                    $valor = 6*$i;
                    echo "<tr>\n    <td>6 x $i</td>\n   <td>$valor</td>\n</tr>\n";
                }
                break; 
            case 7: 
                for($i=0; $i<=10; $i++){
                    $valor = 7*$i;
                    echo "<tr>\n    <td>7 x $i</td>\n   <td>$valor</td>\n</tr>\n";
                }
                break; 
            case 8: 
                for($i=0; $i<=10; $i++){
                    $valor = 8*$i;
                    echo "<tr>\n    <td>8 x $i</td>\n   <td>$valor</td>\n</tr>\n";
                }
                break; 
            case 9: 
                for($i=0; $i<=10; $i++){
                    $valor = 9*$i;
                    echo "<tr>\n    <td>9 x $i</td>\n   <td>$valor</td>\n</tr>\n";
                }
                break; 
            case 10: 
                for($i=0; $i<=10; $i++){
                    $valor = 10*$i;
                    echo "<tr>\n    <td>10 x $i</td>\n  <td>$valor</td>\n</tr>\n";
                }
                break; 
        }
        echo "</table>";
    ?>
    
</body>
</html>
