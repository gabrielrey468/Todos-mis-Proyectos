<?php

/* Realizar operaciones aritmeticas utilizando las funciones*/ 

$Numero1 = 70;
$Numero2 = 30;

function suma ($Numero1, $Numero2){
    $resultado_suma = $Numero1+$Numero2;
    echo "la suma de los numero $Numero1 y $Numero2 es igual $resultado_suma";
echo "</br>";
echo "</br>";
}

function resta ($Numero1,$Numero2){
    $resultado_resta = $Numero1-$Numero2;
    echo "la resta de los numero $Numero1 y $Numero2 es igual $resultado_resta";
echo "</br>";
echo "</br>";
}

function multiplicacion ($Numero1,$Numero2){
    $resultado_multi = $Numero1*$Numero2;
    echo "la Multiplicacion de los numero $Numero1 y $Numero2 es igual $resultado_multi";
echo "</br>";
echo "</br>";
}

function division ($Numero1,$Numero2){
    $resultado_division = $Numero1/$Numero2;
    echo "la Division de los numero $Numero1 y $Numero2 es igual $resultado_division";
echo "</br>";
echo "</br>";
}

suma ($Numero1, $Numero2);
resta ($Numero1, $Numero2);
multiplicacion ($Numero1, $Numero2);
division ($Numero1, $Numero2);