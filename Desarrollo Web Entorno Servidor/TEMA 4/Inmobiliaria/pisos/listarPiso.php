<?php
$server = "localhost";
$user = "root";
$pwd = "";
$tabla = "inmobiliaria";
//Conexion con la BD
$conexion = mysqli_connect($server, $user, $pwd, $tabla) or die ("No se puede CONECTAR a la base de datos");
    
//INSERT en la BD
$query = "SELECT * FROM pisos";
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

        echo "<a href='../index.php'>Inicio </a>";
        echo "<a href='anadirPiso.php'>Añadir </a>";
        echo "<a href='listarPiso.php'>Listar </a>";
        echo "<a href='buscarPiso.php'>Buscar </a>";
        echo "<a href='modificarPiso.php'>Modificar </a>";
        echo "<a href='borrarPiso.php'>Borrar </a><br><br>";
mysqli_close($conexion);

?>