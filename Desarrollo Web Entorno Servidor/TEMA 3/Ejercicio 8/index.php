<?php
if(isset($_REQUEST["color"])){ //Si está seteado el color en el formulario establece el color a lo del formulario y crea la cookie con dicho color
    $color = $_REQUEST["color"];
    setcookie("color", $color, time() + 3*24*3600);
} else if(isset($_COOKIE["color"])){ //Si no está seteado, busca si hay alguna cookie guardada, si la hay el color es el de la cookie 
    $color = $_COOKIE["color"];
} else{ //Si no ocurre nada de lo anterior, establece el color a blanco
        $color = "white";
    }
//Si se setea borrarCookies el color pasa a blanco y la cookie se pone a null y a tiempo negativo para que expire
if(isset($_REQUEST["borrarCookies"])){
    $color = "white";
    setcookie("color", NULL, -1);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color:<?php echo $color; ?>">
    <h3>Escribe un programa que guarde en una cookie el color de fondo (propiedad background-color) de una página. 
   Esta página debe tener únicamente algo de texto y un formulario para cambiar el color.</h3>
    <form action="index.php" method="POST">
    <label for="color">Color de fondo (en inglés o hexadecimal): </label>
    <input type="text" name="color" id="color">
    <input type="submit" value="Aceptar">
    </form><br><br>
    <form action="index.php" method="GET">
        <input type="hidden" name="borrarCookies">
        <input type="submit" value="Borrar Cookies">
    </form>
</body>
</html>