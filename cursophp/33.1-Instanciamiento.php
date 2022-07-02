<?php
include_once("33-Encapsulamiento.php");

$escuela = new Estudiante();

$escuela->Datos("Rodrigo",19,"Francisco");
echo "</br>";
echo "La edad del estudiante es". $escuela->edad;