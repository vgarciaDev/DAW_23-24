<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="buscarCalle.php" method="post">
        <label for="calle">Calle: </label>
        <input type="text" name="calle" id="calle">
        <input type="submit" value="Buscar">
    </form>
    <br><br>
    <?php
        if(isset($_REQUEST["calle"])){
            $calle = $_REQUEST["calle"];
            $server = "localhost";
            $usuario = "root";
            $pwd = "";
            $tabla = "inmobiliaria";

            $conexion = mysqli_connect($server, $usuario, $pwd, $tabla) or die ("No se puede establecer Conexión con la Base de datos");

            $query = "SELECT * FROM pisos WHERE calle = '$calle'";

            $consulta = mysqli_query($conexion, $query);

            $nfilas = mysqli_num_rows($consulta);

            if($nfilas>0){
                echo "<table border=1>\n";
                echo "<tr><th>Código Piso</th>\n";
                echo "<th>Calle</th>\n";
                echo "<th>Número</th>\n";
                echo "<th>Piso</th>\n";
                echo "<th>Puerta</th>\n";
                echo "<th>Código Postal</th>\n";
                echo "<th>Metros</th>\n";
                echo "<th>Zona</th>\n";
                echo "<th>Precio</th>\n";
                echo "<th>Imagen</th>\n";
                echo "<th>Usuario</th></tr>\n";
                for($i=0; $i<$nfilas; $i++){
                    $resultado = mysqli_fetch_array($consulta);
                    echo "<tr><td>".$resultado["Codigo_piso"]."</td>\n";
                    echo "<td>".$resultado["calle"]."</td>\n";
                    echo "<td>".$resultado["numero"]."</td>\n";
                    echo "<td>".$resultado["piso"]."</td>\n";
                    echo "<td>".$resultado["puerta"]."</td>\n";
                    echo "<td>".$resultado["cp"]."</td>\n";
                    echo "<td>".$resultado["metros"]."</td>\n";
                    echo "<td>".$resultado["zona"]."</td>\n";
                    echo "<td>".$resultado["precio"]."</td>\n";
                    echo "<td>".$resultado["imagen"]."</td>\n";
                    echo "<td>".$resultado["usuario_id"]."</td></tr>\n";
                }
            }
        }
    ?>
</body>
</html>