<?php

class Humano{


public $nombre;
public $apellido;
public $fecha_nacimiento;
public $Dui;
function __construct($nombre,$apellido,$fecha_nacimiento,$Dui){
    
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->fecha = $fecha_nacimiento;
    $this->tarjeta = $Dui;
}

function __toString(){
    
    return $this->nombre. " ". $this->apellido. " ". $this->fecha. " ". $this->tarjeta;
}


}