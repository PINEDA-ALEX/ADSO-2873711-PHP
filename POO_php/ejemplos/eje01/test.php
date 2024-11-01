<?php
//se incluye el archivo Persona.php una sola vez
require_once('class/persona.php');
$person1 = new Persona(); // se cra el objeto persona
// Setteamos los atributos
$person1->nombre = "Ana";
$person1->email = "Ana@gmail.com";
$person1->edad = 23;
//mostrar los resultados 
//echo "su nombre es ".$person1->nombre;
//print("<br> su email es:".$person1->email);
//echo <<<TEST
//<br> su edad es $person1->edad
//TEST;
$person1->saludar();

/******************************************************* */
$person2 = new Persona("paco","paco@gmial.com", 20);
$person2->saludar();

unset($person2);