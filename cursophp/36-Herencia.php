<?php

class Automovil{

    public $nombre;
    public $modelo;
    public $fecha_lanzamiento;

    function __construct($nombre,$modelo,$fecha_lanzamiento)
    {
        $this->nombre = $nombre;
        $this->modelo = $modelo;
        $this->lanzamiento = $fecha_lanzamiento;
    }

    function __toString()
    {
        return $this->nombre. "". $this->modelo. "". $this->lanzamiento;
    }
}
