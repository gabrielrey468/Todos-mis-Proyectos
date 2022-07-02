<?php

$nombre = "Carlos";
$nombre2 = "Rodrigo";
$contenido=[1,2,3,4,5,6];

function nombre ($nombre,$nombre2){

    return "$nombre es el mejor amigo de $nombre2";
}
echo nombre($nombre,$nombre2);

function arrays($contenido=[1,2,3,4,5,6]){

    
    return $contenido;
}
echo "</br>";
echo arrays($contenido[0]);