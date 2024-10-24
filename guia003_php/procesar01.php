<?php
//Arrays asociativos nativos de PHP
/*
$_POST: array asociativo que almacena las variables enviadas por el metodo POST
$_POST:['txtNombre']

$_GET: Array asociativo que almacen las variables enviadas por el metodo GET
$_GET:['txtEmail']

$_REQUEST: array asociativo que almacena variables de ambos metodos (GET,POST, COOKIES)
 $_:REQUEST['txtTelefono']
*/

$nombre = $_POST['txtNombre'];
print("Nombre: $nombre");
?>