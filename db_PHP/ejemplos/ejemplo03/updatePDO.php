<?php

require_once 'conexion.php';
$id = 2;
$nombre = "Anastacia";
$email = "anastacia@gmail.com";
$pass = 1234;
$peso = 49;
$cantHijos = 1;


$sqlPDO = $dbPDO->prepare("UPDATE personas SET nombre=:nombre,
email = :email, contrasenia = :pass, peso = :peso,
cantidadHijos = :cantHijos WHERE id = :id");

$sqlPDO->bindParam(":nombre", $nombre);
$sqlPDO->bindParam(":email", $email);
$sqlPDO->bindParam(":pass", $pass);
$sqlPDO->bindParam(":peso", $peso);
$sqlPDO->bindParam(":cantHijos", $cantHijos);
$sqlPDO->bindParam(":id", $id);

$sqlPDO->execute();
header("Location:viewPDO.php");
?>