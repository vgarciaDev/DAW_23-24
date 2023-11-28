<!DOCTYPE html>
<html lang="es-ES">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini-Diccionario</title>
</head>

<body>
    <h3>Crea un mini-diccionario español-inglés que contenga, al menos, 10 palabras (con su traducción).
        <br>Utiliza un array asociativa para almacenar las parejas de palabras. Probar una palabra en español y dará la correspondiente traducción en inglés.</h3>
    
    <?php
    $array = array("Archivo" => "File", 
    "Ratón" => "Mouse", 
    "Teclado" => "Keyboard", 
    "Ventana" => "Window", 
    "Servidor" => "Server", 
    "Contraseña" => "Password", 
    "Imprimir" => "Print", 
    "Base de datos" => "Database", 
    "Navegador" => "Browser",
    "Screen" => "Pantalla");

    //Para probar las palabras voy a generar aleatoriamente una clave, almacenando todas las claves en un array y luego generando un número aleatorio para que elija una al azar.
    $arrayKeys = ["Archivo", "Ratón", "Teclado", "Ventana", "Servidor", "Contraseña", "Imprimir", "Base de datos", "Navegador", "Screen"]; //existe la función: array_keys($array) para sacar todas las claves de un array y así no hacerlo manualmente.
    $aleatorio = rand(0, count($arrayKeys) -1);
    echo "<p><b>Palabra:</b> $arrayKeys[$aleatorio]</p>\n
    <p><b>Traducción:</b> ". $array[$arrayKeys[$aleatorio]];
    ?>
</body>

</html>
