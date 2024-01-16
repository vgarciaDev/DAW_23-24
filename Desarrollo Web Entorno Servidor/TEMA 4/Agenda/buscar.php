<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto Buscado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <style>
      a {
        text-decoration: none;
        color: black;
      }
      a:hover {
        color: rgb(75, 75, 75);
      }
    </style>
</head>
<body style="background-color: rgb(216, 216, 216)">
      <div class="container">
        <h1 class="mt-3">Contacto</h1>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Primer Apellido</th>
                <th scope="col">Segundo Apellido</th>
                <th scope="col">Teléfono</th>
                <th scope="col">Email</th>
              </tr>
            </thead>
            <tbody>
        <?php
            $nombre = $_REQUEST["nombre"];
            $fich = fopen("contactos.txt","r");
            $encontrada=false;
            while(!feof($fich)){
                $linea = fgets($fich);
                $arrayDatos = explode(",", $linea);
                if(in_array($nombre, $arrayDatos)){ //la función in_array devuelve true/false si el string que le pasas está dentro del array o no
                    $nombre = $arrayDatos[0];
                    $apellido1 = $arrayDatos[1];
                    $apellido2 = $arrayDatos[2];
                    $telefono = $arrayDatos[3];
                    $email = $arrayDatos[4];
                    echo "<tr>";
                    echo "<th scope='row'>". $nombre."</th>";
                    echo "<td scope='row'>". $apellido1."</td>";
                    echo "<td scope='row'>". $apellido2."</td>";
                    echo "<td scope='row'>". $telefono."</td>";
                    echo "<td scope='row'>". $email."</td>";
                    echo "</tr>";
                    $encontrada=true;;
                } 
            }
            if(!$encontrada){
                echo 'No se encontro el contacto "' .$nombre.'"';
            }
            fclose($fich); 
        ?>

            </tbody>
        </table>
        <div class="enlaces">
            <h3 class="mt-3">Menú</h2>
            <nav class="navbar">
              <ul class="navbar-nav">
              <li class="nav-item">
                  <a href="index.html"> Volver al Inicio</a>
                </li>
                <li class="nav-item">
                  <a href="alta.php"> Añadir nuevo contacto </a>
                </li>
                <li class="nav-item">
                  <a href="mostrar.php"> Mostrar todos los contactos </a>
                </li>
                <li class="nav-item">
                  <a href="buscar.html"> Buscar contacto </a>
                </li>
              </ul>
            </nav>
        </div>
    </div>
</body>
</html>