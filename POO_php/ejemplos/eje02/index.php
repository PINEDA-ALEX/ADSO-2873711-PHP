<?php
require_once 'class/producto.php';
$id = 1;
$nombre= "Portatil Lenovo";
$precio = 2000000;
$descripcion ="Equipo de computo";

$prod_obj = new producto($id, $nombre, $precio, $descripcion);
echo "<br>el id del producto es:".$prod_obj->getId();
echo "<br>el nombre es:".$prod_obj->getNombre();
echo "<br>el precio es:".$prod_obj->getPrecio();
echo "<br>la descripcion es:".$prod_obj->getDescripcion();

$prod_obj->setPrecio(3500000);
echo "<br> El nuevo precio del producto es".$prod_obj->getPrecio();