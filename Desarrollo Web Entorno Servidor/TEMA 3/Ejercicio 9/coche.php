<?php
include_once 'vehiculo.php';
class Coche extends Vehiculo{
    private $cilindrada;

    public function __construct($cilindrada){
        parent::__construct();
        $this->cilindrada=$cilindrada;
    }

    public function quemaRueda(){
        print "<p>Ruedasssss...</p>";
    }
}

?>