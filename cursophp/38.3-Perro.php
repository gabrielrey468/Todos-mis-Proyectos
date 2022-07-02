<?php
include_once ("38.1-raza1.php");
include_once ("38.2-raza2.php");

class perro1 extends Chiwawa {
    
    function __construct($nombre,$edad,$estatura)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->estatura = $estatura;
    }
    function __toString()
    {
        return $this->nombre. " ".$this->edad. " ".$this->estatura;
    }
}

class perro2 extends Bulldog{

    function __construct($nombre,$edad,$estatura,$Raza)
    {
        parent:: __construct($nombre,$edad,$estatura,$Raza);
        $this->raza = $Raza;
    }
    function __toString()
    {
        return $this->nombre. " ".$this->edad. " ".$this->estatura;
    }
}
