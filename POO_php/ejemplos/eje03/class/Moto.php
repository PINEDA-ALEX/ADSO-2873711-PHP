<?php
require_once 'vehiculo.php';
class Moto extends Vehiculo{

    public function __construct($motor=null,$cantR=null,$mar=null)
    {
        //se llama el condtructor del padre
        parent::__construct($motor=null,$cantR=null,$mar=null);
    }

}