<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ejercicio 4</title>
  </head>
  <body>
    <?php
    error_reporting(0); //Esta función es para que no salgan errores de php al usuario por pantalla

    //NOMBRE
    $nombre = strip_tags($_REQUEST['nombre']);
    if($nombre == ""){
        print "<p>No has introducido tu nombre</p>";
    } else{
        print "<p>Su nombre es <b>$nombre</b></p>";
    }

    //APELLIDOS
    $apellidos = strip_tags($_REQUEST['apellidos']);
    if($apellidos == ""){
        print "<p>No has introducido tus apellidos</p>";
    } else{
        print "<p>Sus apellidos son <b>$apellidos</b></p>";
    }

    //EDAD
    $edad = $_REQUEST['edad'];
    if($edad == 1){
        print "<p>Tiene <b>entre 18 y 29 años</b></p>";
    } else if ($edad ==2){
        print "<p>Tiene <b>entre 30 y 39 años</b></p>";
    } else if($edad == 3){
        print "<p>Tiene <b>entre 40 y 60 años</b></p>";
    } else if ($edad == 4){
        print "<p>Tiene <b>más de 60 años</b></p>";
    }

    //PESO
    $peso = strip_tags($_REQUEST['peso']);
    if($peso == ""){
        print "<p>No has introducido tu peso</p>";
    } else{
        print "<p>Su peso es de <b>$peso</b> kg</p>";
    }

    //genero    
    if(isset($_REQUEST['genero'])){
        $genero = $_REQUEST['genero'];
    } else{
        print "<p>No has indicado su genero</p>";
    }
    if ( $genero == "h"){
        print "<p>Género: <b>hombre</b></p>";
    }else if ( $genero == "m"){
        print "<p>Género: <b>mujer</b></p>";
    } else if( $genero == "o"){
        print "<p>Género: <b>otro</b></p>";
    }
    
    //ESTADO
    if(isset($_REQUEST["estado"])){
        $estado = $_REQUEST['estado'];
    } else{
        print "<p>No has indicado su estado civil</p>";
    }
    if ( $estado == "s"){
        print "<p>Su estado civil es <b>Soltero</b></p>";
    }else if ( $estado == "c"){
        print "<p>Su estado civil es <b>Casado</b></p>";
    } else if ( $estado == "o"){
        print "<p>Su estado civil es <b>Otro</b></p>";
    } 

    //AFICIONES
    if(isset($_REQUEST["aficiones"])){
        $aficiones = $_REQUEST['aficiones'];
        print "<p>Le gusta: <b>";
    } else{
        print "No ha introducido ninguna afición";
    }
    for($i = 0; $i < count($aficiones)-1; $i++){
        print " $aficiones[$i], ";
    }
    $ultimo = $aficiones[count($aficiones)-1];
    print "$ultimo.</b></p>";
    print "<a href='index.html'>Volver al formulario</a>";
    ?>
  </body>
</html>