<?php
    $fechaActual = date("d-m-y");
    echo "Fecha Actual> $fechaActual";
    echo "<br>";
    echo'fecha Actual> $fechaActual';
    echo"<br>";
    echo 'Fecha Actual> $fechaActual> '.$fechaActual;
    $dia = date("d");
    $mes = date("m");
    $year = date("y");
    print("<br>dia: $dia<br>");
    print("mes: $mes<br>");
    print("año: $year<br>");

    if($dia <= 10){
        echo "El sitio esta disponibles";
    } else{
        echo "El sitio temporalmente fuer   a de servicio";
    }

    $ident = date("e");
    print("$ident <br>");

    $diasemana = date("w");
    print("el dia de la semana es $diasemana <br>");

    $semanas = date("W");
    print("la semana del año es $semanas <br>");
    
    $mesa = date("m");
    print("el mes es $mesa <br>");

    $hora = date("A");
    print("la hora es $hora <br><br>");


?>