<!DOCTYPE html>
<html lang="es-ES">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays 1</title>
</head>

<body>
    <h3>Define tres arrays de 10 números enteros cada una, con nombres "numero",cuadrado"
        y "cubo".<br> Carga el array "numero" con valores aleatorios entre 0 y 100. <br>En el array "cuadrado" se deben
        almacenar los cuadrados de los valores que hay en el array "numero". <br>En el array "cubo" se deben almacenar los
        cubos de los valores que hay en "numero".<br>
        A continuación, muestra el contenido de los tres arrays dispuestos en tres columnas.</h3>

    <?php
    $numeros = array();
    $cuadrados = array();
    $cubos = array();
    echo "<table border='1'> \n
    <tr><th>Numero</th>\n
    <th>Cuadrado</th>\n
    <th>Cubo</th></tr>\n";

    for ($i = 0; $i < 10; $i++) {
        $numeros[$i]=(int)floor((rand(0,100)));
        $cuadrados[$i] = $numeros[$i]**2; //Método **2
        $cubos[$i] = pow($numeros[$i],3); //Método pow()
        echo ("<tr><td>$numeros[$i]</td><td>$cuadrados[$i]</td><td>$cubos[$i]</td></tr>\n");
    }

    echo "</table>";
    ?>
</body>

</html>
