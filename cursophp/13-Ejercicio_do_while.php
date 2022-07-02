<?php

/*Realizar las tablas de multiplicar que sean del 0 al 20*/

/*$n = 0;
$tabla = 2;
$resultado ="";
while ($n <= 20) {
    $resultado = $tabla*$n;
    echo "$tabla x $n = $resultado </br>";
$n++;
}*/

$n = 0;
$tabla = 2;
$resultado ="";

do{
    $resultado = $tabla*$n;
    echo "$tabla x $n = $resultado </br></br>";
    $n++;
}while ($n <= 20);
