<?php

/* Las clases hacen referencia a un objeto en particular*/ 

class Estudiante{

    public $Nombre = "Armando";
    public $Edad;
    public $Institucion;

    public function Datos ($Nombre,$Edad,$Institucion){
        $this->nombre = $Nombre;
        $this->edad = $Edad;
        $this->escuela = $Institucion;
        echo "El estudiante $Nombre con la edad de $Edad pertenece a la institucion $Institucion";
    }
    
}
#Creacion de un objeto a instanciar
$escuela = new Estudiante();

echo $escuela->Datos("Pedro",20,"Fresedo");
echo "</br>";
echo "</br>";
