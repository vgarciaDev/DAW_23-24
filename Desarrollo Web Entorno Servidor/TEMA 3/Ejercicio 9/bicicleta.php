<?php
include_once 'vehiculo.php';

class Bicicleta extends Vehiculo{
    private $numero_de_marchas;

    public function __construc($numero_de_marchas){
        parent::__construc();
        $this->numero_de_marchas = $numero_de_marchas;
    }

    public function hazCaballito(){
        echo "<p>Caballito...</p>";
    }
}
?>