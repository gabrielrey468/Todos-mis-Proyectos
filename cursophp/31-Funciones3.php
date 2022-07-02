<?php
/* Realizaremos un ejercicio declarando valores dentro de los parametros*/ 

function Estudiante($Nombre = "Denis",$edad = "19",$seccion = "Octavo A",$turno = "Vespertino"){

    echo "El estudiante $Nombre de edad $edad pertenece a la seccion $seccion del turno $turno";
    echo "</br>";

}

Estudiante();
Estudiante("Logan",20,"Octavo A","Vespertino");