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
        for($i=0; $i<$nfilas; $i++){
            $resultado = mysqli_fetch_array($consulta);
            echo "<form action='modificarUsuario3.php' method='get'>";
            echo "<label for='id'>Código Usuario: </label>";
            echo "<input type='text' name='id' id='id' value='".$resultado['usuario_id']."'><br><br>";
            echo "<label for='nombre'>Nombre: </label>";
            echo "<input type='text' name='correo' id='nombre' value='".$resultado['nombres']."'><br><br>";
            echo "<label for='correo'>Correo: </label>";
            echo "<input type='text' name='correo' id='correo' value='".$resultado['correo']."'><br><br>";
            echo "<label for='dni'>DNI: </label>";
            echo "<input type='text' name='dni' id='dni' value='".$resultado['clave']."'><br><br>";
            echo "<input type='submit' value='Modificar'>";
            echo "</form>";
        }
    }
    mysqli_close($conexion);

    
}
?>

