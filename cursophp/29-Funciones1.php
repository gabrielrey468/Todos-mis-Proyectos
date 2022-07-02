<?php

/* Realizar una funcion (Programa) que me muestre los siguientes datos

1- Nombre de un profesor
2- Edad del profesor
3- Aula asignada
*/

$nombre = "Jose Rodriguez";
$edad = "30";
$aula = "Octavo grado";

function maestro ($nombre, $edad, $aula){

    echo "El profesor $nombre tiene la edad $edad y es encargado del salon de $aula";
}

maestro("Jose Rodriguez",30,"decimo grado");