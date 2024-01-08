<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ejercicio 1</title>
  </head>
  <body>
    <h3>Hacer un programa php que tenga una función que reciba con 3 números y devuelva el mayor de ellos.</h3>
    
    <?php
    error_reporting(0); //función que hace que no salgan warning por no tener las variables ninguna asignación.
    
    $num1 = $_REQUEST["num1"];
    $num2 = $_REQUEST["num2"];
    $num3 = $_REQUEST["num3"];

    if(!isset($_REQUEST["num1"])||!isset($_REQUEST["num2"])||!isset($_REQUEST["num3"])){ //Si no están asignadas las variables entonces muestra el formulario
      ?>
      <form action="ejercicio5.php" method="POST">
        <label for="num1">Introduce el primer número</label>
        <input type="number" name="num1" id="num1"><br><br>

        <label for="num2">Introduce el segundo número</label>
        <input type="number" name="num2" id="num2"><br><br>
        
        <label for="num3">Introduce el tercer número</label>
        <input type="number" name="num3" id="num3"><br><br>
        <button type="submit">¿Cuál es mayor?</button>
    </form>
    <?php
    } else{ //Si las variables están asignadas, entonces muestra el resultado
      
      $mayor = mayor($num1, $num2, $num3);

      print "El mayor de los números introducidos es: $mayor";
    }

    //FUNCION NUMERO MAYOR
    function mayor($n1, $n2, $n3){
      if($n1 > $n2 && $n1 > $n3){
        return $n1;
      } else if($n2> $n1 && $n2 > $n3){
        return $n2;
      } else if($n3 > $n1 && $n3 > $n2){
        return $n3;
      } else if($n1 == $n2 && $n1 == $n3){
        return $n1;
      } else if($n2 == $n3){
        return $n2;
      }
    }
    ?>
    
  </body>
</html>
