<?php
require_once 'conexion.php';

$id = 2;

$sqlPDO = $dbPDO->prepare("DELETE FROM personas WHERE id=:id");

$sqlPDO->bindParam(":id", $id, PDO::PARAM_INT);


$sqlPDO->execute();
header("Location:viewPDO.php");