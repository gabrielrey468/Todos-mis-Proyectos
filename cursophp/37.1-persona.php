<?php
 
 class persona extends Humano{
     function __construct($nombre,$apellido,$fecha_nacimiento,$Dui,$telefono)
     {
         parent::__construct($nombre,$apellido,$fecha_nacimiento,$Dui);
         $this->telefono = $telefono;
     }
     function __toString()
     {
         return $this->nombre. " ". $this->apellido. " ". $this->fecha. " ". $this->tarjeta. " ". $this->telefono;
     }
 }
 