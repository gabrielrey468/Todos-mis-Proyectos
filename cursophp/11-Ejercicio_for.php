<?php
/*Realiza un contador de números que empiece desde el numero 0 hasta el numero 100, pero este debe ir contando

los números de 10 en 10 tanto de forma ascendente como descendiente*/

$tabla = 10;
$resultado = "";

for ($numero = 0; $numero <=10 ; $numero++) { 
    $resultado = $tabla * $numero;
    echo "$tabla x $numero = $resultado </br>";
}

echo "Su ciclo o bucle for ha finalizado la tabla $tabla";