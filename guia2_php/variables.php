<?php
$nombre = "jaun"; //string
$edad = 25; //int
$estado = false; // bool
$peso = 65.5; //double
//operador ternario
$estadoTxt = ($estado)?"Activo":"Inactivo";
//$estadoTxt = (!$estado)?"Inactivo":"Activo";

$output = <<<out
    nombre: $nombre<br>
    edad: $edad<br>
    estado: $estado<br>
    peso: $peso




out;
echo $output;
echo "<br>";

//$estadlloviendo = true;
//$clima = ($estalloviendo)?"Esta lloviendo":"hace sol";
//$clima = (!$estalloviendo)?"hace sol": "Esta lloviendo";
//echo "Clima: $clima";

echo "<br><hr>";
//Arrays (listas)
$arrayFrutas = ["mango","pera","piña","kiwi"];
echo $arrayFrutas[2];


//array asocistivo (indice son cadenas)
$arrayUsuario = 
["nombre"=>"juan","email"=>"j@gmail.com", "edad"=>20,"estado"=>true];
?>