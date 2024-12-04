<?php
require_once 'vehiculo.php';

class Auto extends Vehiculo{
    private $cantidadPuertas;

    public function __construct($cantP= null,$motor=null,$cantR=null,$mar=null)
    {
        $this->cantidadPuertas = $cantP;
        //se llama el constructor de la clase padre
        parent::__construct($motorEncendido,$cantRuedas,$marca);
    }

    public function setCantidadPuertas()
    {
        return $this->CantidadPuertas;
    }
    public function getCantidadPuertas(){
        return $this->CantidadPuertas;
    }

} 