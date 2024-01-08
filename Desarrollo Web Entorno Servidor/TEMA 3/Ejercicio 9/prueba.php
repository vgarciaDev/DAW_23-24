<?php
include_once 'Bicicleta.php';
include_once 'Coche.php';
// crea una bicicleta con 24 marchas
$miBici = new Bicicleta("24");
 
// crea un coche con 1500cc de cilindrada
$miCoche = new Coche(1500);
 
$miBici->recorre(40);
$miCoche->recorre(200);
echo $miBici->hazCaballito()."<br>";
echo $miCoche->quemaRueda()."<br>";
$miBici->recorre(60);
echo "Mi bici ha recorrido ".$miBici->getKmRecorridos()." Km<br>";
echo "Mi coche ha recorrido ".$miCoche->getKmRecorridos()." Km<br>";
echo "Se han creado un total de ".$miBici::getVehiculosCreados()." vehículos<br>";
echo "Todos los vehículos han hecho un total de ".$miCoche::getKmTotales()." Km<br>";

$otroCoche = new Coche(2000);
$otraBici = new Bicicleta("12");
$otroCoche->recorre(340);
$otraBici->recorre(25);
echo $otraBici->hazCaballito()."<br>";
echo $otroCoche->quemaRueda()."<br>";
$otraBici->recorre(60);

echo "Mi otra bici ha recorrido ".$otraBici->getKmRecorridos()." Km<br>";
echo "Mi otro coche ha recorrido ".$otroCoche->getKmRecorridos()." Km<br>";
echo "Se han creado un total de ".Vehiculo::getVehiculosCreados()." vehículos<br>";
echo "Todos los vehículos han hecho un total de ".$otroCoche::getKmTotales()." Km<br>";
?>