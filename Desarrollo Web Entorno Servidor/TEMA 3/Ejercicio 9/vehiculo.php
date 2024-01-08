<?php
class Vehiculo{
    public static $kms_totales;
    public static $vehiculosCreados;
    private $km_recorridos;

    public function __construct(){
        $this->km_recorridos = 0;
        self::$vehiculosCreados++; //Al ser una variable de clase no se refiere a ella con $this->variable, sino con self::$variable
    }

    public static function getVehiculosCreados(){
        return self::$vehiculosCreados;
    }

    public static function getKmTotales(){
        return self::$kms_totales;
    }

    public function getKmRecorridos(){
        return $this->km_recorridos;
    }

    public function recorre($km){
        self::$kms_totales+=$km;
        $this->km_recorridos+=$km;
    }

}
?>