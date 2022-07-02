<?php
/* el return nos ayuda a resolver valores o resultados*/ 

$numero1 = 14;
$numero2 = 14;
$resultado ="28";
$resultado2 ="15";
function Suma($numero1,$numero2){

    $resultado = $numero1 + $numero2;
    
    return $resultado;#nos retorno esta variable
}

echo Suma($numero1,$numero2);# y nos la presento en esta seccion mostrandola en pantalla


function resta($numero1,$numero2){

    $resultado2 = $numero1 + $numero2;

    return $numero1-$numero2;
}
echo "</br>";
echo resta(10,5);