<?php

    //Recoger datos del formulario
    if(isset($_REQUEST["calle"]) && isset($_REQUEST["numero"]) && isset($_REQUEST["piso"]) && isset($_REQUEST["puerta"])&&$_REQUEST["cp"]&&isset($_REQUEST["metros"])&&isset($_REQUEST["zona"])&&isset($_REQUEST["precio"]) && isset($_REQUEST["imagen"]) && isset($_REQUEST["usuario"])){
        $calle = $_REQUEST["calle"];
        $numero = $_REQUEST["numero"];
        $piso = $_REQUEST["piso"];
        $puerta = $_REQUEST["puerta"];
        $cp = $_REQUEST["cp"];
        $metros = $_REQUEST["metros"];
        $zona = $_REQUEST["zona"];
        $precio = $_REQUEST["precio"];
        $imagen = $_REQUEST["imagen"];
        $usuario = $_REQUEST["usuario"];
    }
    $server = "localhost";
    $user = "root";
    $pwd = "";
    $tabla = "inmobiliaria";
    //Conexion con la BD
    $conexion = mysqli_connect($server, $user, $pwd, $tabla) or die ("No se puede CONECTAR a la base de datos");
    
    //INSERT en la BD
    $query = "INSERT INTO pisos (calle, numero, piso, puerta, cp, metros, zona, precio, imagen, usuario_id) VALUES ('$calle', '$numero', '$piso', '$puerta', '$cp', '$metros', '$zona', '$precio', '$imagen', '$usuario')";
    
    //MENSAJES DE ERROR/ACIERTO
    if(mysqli_query($conexion, $query)){
        echo "Piso registrado con éxito<br><br>";
        echo "<a href='../index.php'>Inicio </a>";
        echo "<a href='anadirPiso.php'>Añadir </a>";
        echo "<a href='listarPiso.php'>Listar </a>";
        echo "<a href='buscarPiso.php'>Buscar </a>";
        echo "<a href='modificarPiso.php'>Modificar </a>";
        echo "<a href='borrarPiso.php'>Borrar </a>";
    } else {
        echo "Error al registrar el piso " . mysqli_error($conexion);
    }
    
    //CERRAR CONEXION BD
    mysqli_close($conexion);
?>