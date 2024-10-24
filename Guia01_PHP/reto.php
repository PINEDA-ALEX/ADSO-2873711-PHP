<?php
    setlocale(LC_TIME, "es_ES.UTF-8", "es_ES", "Spanish_Spain");
    date_default_timezone_set('America/Bogota');
    print("reto <br><br>");

    $hoy = strftime("%A %d de %B");
    $hora = date("g:i:s A");
    $año = date("o");
 


    print("Hola, hoy es $hoy de $año y son las $hora")

?>          