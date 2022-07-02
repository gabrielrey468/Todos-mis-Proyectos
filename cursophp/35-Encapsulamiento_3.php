<?php

/* El nivel de acceso protected es igual a el nivel private*/ 

class operacion{

    protected $resultado = 40;

    function Suma($Numero1, $Numero2){

    $resultado = $Numero1+$Numero2;
    echo " La suma del numero $Numero1 y el numero $Numero2 es igual a: $resultado";
    }
}

