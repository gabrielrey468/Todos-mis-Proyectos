<?php

/*Hacer las tablas de multiplicar*/

$numero = 0;
$tabla = 4;
$resultado = "";

while ($numero <=10) {
    
    $resultado = $tabla*$numero;
    echo "$tabla x $numero = $resultado</br>";
    $numero++;
}

$numero2 = 0;
$tabla2 = 6;
$resultado2 = "";

while ($numero2 <=10) {
    
    $resultado2 = $tabla2*$numero2;
    echo "</br>$tabla2 x $numero2 = $resultado2</br>";
    $numero2++;
}