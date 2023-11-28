<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ejercicio 3</title>
    <style>
      form input[type="number"] {
        width: 100px;
        margin: 5px 0px;
      }
      form input[type="radio"] {
        margin: 15px 3px;
      }
    </style>
  </head>
  <body>
    <form action="datos_operaciones.php" method="POST">
      <label for="num1">Introduzca el primer número:</label>
      <input type="number" name="num1" id="num1" /><br />
      <label for="num2">Introduzca el segundo número:</label>
      <input type="number" name="num2" id="num2" /><br />
      <label for="operacion">Seleccione la operación:</label>
      <input type="radio" name="operacion" value="s" id="suma" checked />Suma
      <input type="radio" name="operacion" value="r" id="resta" />Resta
      <input type="radio" name="operacion" value="p" id="producto" />Producto
      <input type="radio" name="operacion" value="c" id="cociente" />Cociente<br />
      <button type="submit">Enviar Datos</button>
    </form>
  </body>
</html>
