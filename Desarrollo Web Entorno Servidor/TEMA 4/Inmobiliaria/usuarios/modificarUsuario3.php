<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
    if(isset($_REQUEST["id"])&&isset($_REQUEST["nombre"])&&isset($_REQUEST["correo"])&&isset($_REQUEST["dni"])){
        $id = $_REQUEST["id"];
        $nombre = $_REQUEST["nombre"];
        $correo = $_REQUEST["correo"];
        $dni = $_REQUEST["dni"];

        $server = "localhost";
        $user = "root";
        $pwd = "";
        $tabla = "inmobiliaria";

        $conexion = mysqli_connect($server, $user, $pwd, $tabla) or die ("No se puede establecer conexión con la bd");

        $query = "UPDATE usuario SET nombres = '$nombre', correo = '$correo', clave = '$dni' WHERE usuario_id = '$id'";

        $resultado = mysqli_query($conexion,$query);

        if($resultado){
            echo "Usuario modificado correctamente";
        } else{
            echo "Error al modificar el usuario" . mysqli_error($conn);
        }
        mysqli_close($conexion);
    }
?>