<?php
/*Un programa que me diga si el numero ingresado es mayor que 200*/
$n =400;

if ($n > 200) {
    echo "El numero que ingreso el usuario es mayor a 200: numero $n";
}

else{
    echo "El numero que ha ingreso el usuario es menor o igual a 200: numero $n";
}

/* Para realizar la suma de dos numeros el primero debe ser positivo y el segundo tambien*/

$numero1 = 5;
$numero2 = -10;
$resutado = "";

if ($numero1 >0 && $numero2 >0) {
    $resutado = $numero1 + $numero2;
    echo "</br>La suma de los dos numeros $numero1 y $numero2 es igual : $resutado";
}

else{
    echo "</br>Los numeros ingresados no cumplen el criterio establecido";
}