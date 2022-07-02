<?php

class Bulldog extends Chiwawa
{
    function __construct($nombre,$edad,$estatura,$Raza)
    {
        parent:: __construct($nombre,$edad,$estatura);
        $this->raza = $Raza;
    }
    function __toString()
    {
        return $this->nombre. " ".$this->edad. " ".$this->estatura. " ".$this->raza;
    }
}
