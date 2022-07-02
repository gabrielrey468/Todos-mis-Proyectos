<?php
/*Realizar un programa el cual me muestre los arreglos sin necesidad de utilizar el ciclo foreach*/ 

$arreglo = [2,4,6,8,10,12,14,16,18];

for ($i=0; $i < count($arreglo) ; $i++) { 
    echo $arreglo[$i];
    echo "</br>";
}

echo "</br>";
echo $arreglo[1] = "Hola como estas";