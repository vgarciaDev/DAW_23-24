<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Añadir Piso</title>
  </head>
  <body>
    <a href="../index.php">Inicio</a>
    <a href="anadirPiso.php">Añadir</a>
    <a href="listarPiso.php">Listar</a>
    <a href="buscarPiso.php">Buscar</a>
    <a href="modificarPiso.php">Modificar</a>
    <a href="borrarPiso.php">Borrar</a><br /><br />
    <form action="anadirPiso2.php" method="POST">
      <label for="calle">Calle: </label>
      <input type="text" name="calle" id="calle" /><br /><br />
      <label for="numero">Número: </label>
      <input type="number" name="numero" id="numero" /><br /><br />
      <label for="piso">Piso: </label>
      <input type="text" name="piso" id="piso" /><br /><br />
      <label for="puerta">Puerta: </label>
      <input type="text" name="puerta" id="puerta" /><br /><br />
      <label for="cp">Código Postal: </label>
      <input type="text" name="cp" id="cp" /><br /><br />
      <label for="metros">Metros: </label>
      <input type="text" name="metros" id="metros" /><br /><br />
      <label for="zona">Zona: </label>
      <input type="text" name="zona" id="zona" /><br /><br />
      <label for="precio">Precio: </label>
      <input type="text" name="precio" id="precio" /><br /><br />
      <label for="imagen">Imagen: </label>
      <input type="file" name="imagen" id="imagen" /><br /><br />
      <label for="usuario">id Usuario: </label>
      <input type="text" name="usuario" id="usuario" /><br /><br />
      <input type="submit" value="Enviar">
    </form>
  </body>
</html>
