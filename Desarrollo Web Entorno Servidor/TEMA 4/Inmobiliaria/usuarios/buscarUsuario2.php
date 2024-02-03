<?php
if(isset($_REQUEST["dni"])){
    $dni = $_REQUEST["dni"];

    $server = "localhost";
    $user = "root";
    $pwd = "";
    $tabla = "inmobiliaria";

    $conexion = mysqli_connect($server, $user, $pwd, $tabla);

    $query = "SELECT * FROM usuario WHERE clave = '$dni'";

    $consulta = mysqli_query($conexion, $query);

    $nfilas = mysqli_num_rows($consulta);

    if($nfilas>0){
        echo "<table border=1>\n";
        echo "<tr><th>Código Usuario</th>\n";
        echo "<th>Nombre</th>\n";
        echo "<th>Correo</th>\n";
        echo "<th>DNI</th></tr>\n";
        for($i=0; $i<$nfilas; $i++){
            $resultado = mysqli_fetch_array($consulta);
            echo "<tr><td>".$resultado["usuario_id"]."</td>\n";
            echo "<td>".$resultado["nombres"]."</td>\n";
            echo "<td>".$resultado["correo"]."</td>\n";
            echo "<td>".$resultado["clave"]."</td></tr>\n";
        }
    }
    mysqli_close($conexion);
}
?>