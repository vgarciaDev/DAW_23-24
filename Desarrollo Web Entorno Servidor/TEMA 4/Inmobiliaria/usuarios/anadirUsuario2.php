<?php
if(isset($_REQUEST["nombre"])&&isset($_REQUEST["correo"])&&isset($_REQUEST["dni"])){
    $nombre = $_REQUEST["nombre"];
    $correo = $_REQUEST["correo"];
    $dni = $_REQUEST["dni"];

    $server = "localhost";
    $user = "root";
    $pwd = "";
    $tabla = "inmobiliaria";

    $conexion = mysqli_connect($server, $user, $pwd, $tabla);

    $query = "INSERT INTO usuario (nombres, correo, clave) VALUES ('$nombre', '$correo', '$dni')";

    if(mysqli_query($conexion, $query)){
        echo "Usuario registrado con éxito";
    }else{
        echo "Fallo al registrar el usuario";
    }
    mysqli_close($conexion);
} else{
    echo "Faltan datos por rellenar";
}

?>