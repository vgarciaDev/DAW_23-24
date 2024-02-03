<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="buscarCodigo.php" method="post">
        <label for="codigo">Código: </label>
        <input type="text" name="codigo" id="codigo">
        <input type="submit" value="Buscar">
    </form>
    <?php
    if(isset($_REQUEST["codigo"])){
        $codigo = $_REQUEST["codigo"];
        $server = "localhost";
        $user = "root";
        $pwd = "";
        $tabla = "inmobiliaria";

        //Conexion con la BD
        $conexion = mysqli_connect($server, $user, $pwd, $tabla) or die ("No se puede CONECTAR a la base de datos");    

        //QUERY
        $query = "SELECT * FROM pisos WHERE Codigo_piso = '$codigo'";

        //Consulta
        $consulta = mysqli_query($conexion, $query);

        //nFilas
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
            for($i=0; $i<$nfilas;$i++){
                $resultado=mysqli_fetch_array($consulta);
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
        
        }else {
            echo "No hay pisos disponibles para listar";
        }
    }
    
    ?>
</body>
</html>