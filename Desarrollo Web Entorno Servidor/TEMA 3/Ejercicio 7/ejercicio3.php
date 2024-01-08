<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <h3>Realizar un contador de visitas con sesiones. Cada vez que entre en la pagina que me cuente una visita.</h3>
    <?php
    session_start();

    if(!isset($_SESSION["contador"])){
        $_SESSION["contador"] = 1;
    } else{
        $_SESSION["contador"]++;
    }
    
    print "<h3>Visitas a esta web: ".$_SESSION["contador"]."</h3>";
    ?>
</body>
</html>