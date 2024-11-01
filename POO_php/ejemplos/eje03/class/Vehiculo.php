<?php
class Vehiculo{
    private $motorEncendido = false;
    private $cantidadRuedas;
    private $marca;

    public function __construct($motor=null,$cantR=null,$mar=null){
        $this->motorEncendido = $motor;

        $this->cantidadRuedad= $cantR;
        $this->marca = $mar;
    }

    public function encenderMotor(){
        $this->motorEncendido = true;

    } public function apagarMotor(){
        $this->motorEncendido = false;

    }
    public function arrancar(){
        if($this->motorEncendido){
        }else{
            echo "Primero debe encender el vehiculo";

            }
        }

        public function stMotorencendido($motor){
            $this->motorEncendido = $motor;
        }
        
}


