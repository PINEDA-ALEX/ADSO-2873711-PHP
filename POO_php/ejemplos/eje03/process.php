<?php
require_once 'class/Moto.php';
require_once 'class/Auto.php';

$moto1 = new Moto(false, 2, "yamaha");
$moto1 ->arrancar();
$moto1->encenderMotor();
$moto1->arrancar();


$cantidadRuedas =  4;
$motorEncendido = true;
$cantPuertas = 2;
$marca = "mini cooper";
echo "<br><hr>";
$auto = new auto($cantPuertas, $motorEncendido, $cantidadRuedas, $marca);
$auto1 ->arrancar();
$auto1 ->encenderMotor();
$auto1-> arrancar();

?>