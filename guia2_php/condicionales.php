<?php
$aleatorio = rand(1,100);
if($aleatorio > 50){
    echo "El numero es mayor o igual a 50";
}else{
    echo "El numero es menor a 50";
}


/** generar un valor aleatorio entre 1 y 999. Luego mosotrar. si tiene 1,2 0 3 digitos*/

$aleatorio2 = rand(1, 999);
echo "el nuemro es, $aleatorio2";
if($aleatorio2 <= 9){
    echo "1 digito";
}elseif($aleatorio2 < 100){
    echo"2 digitos";
}else{
    echo"3 digitos";
}
?>