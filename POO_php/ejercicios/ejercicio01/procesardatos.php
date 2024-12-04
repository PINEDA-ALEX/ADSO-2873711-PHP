<?php
include "empleado.php";

$nombre = $_POST['nombre'] ?? null;
$sueldo = $_POST['sueldo'] ?? null;
$email = $_POST['email'] ?? null;
$fechaNacimiento = $_POST['fechaNacimiento'] ?? null;
$peso = $_POST['peso'] ?? null;
$altura = $_POST['altura'] ?? null;

if ($nombre && $sueldo && $email && $fechaNacimiento && $peso && $altura) {
    $empleado = new Empleado();
    $empleado->inicializar($nombre, $sueldo, $email, $fechaNacimiento, $peso, $altura);
    $empleado->imprimir();
} else {
    echo "<h2>Faltan datos del formulario.</h2>";
}
?>
