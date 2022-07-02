<?php
include_once("34-Encapsulamiento_2.php");

$reporte = new Maestro();


$reporte->Datos_maestro("Josue Arnoldo Vasquez",34,"Octavo grado B",2004);
echo "</br>";
echo $reporte->codigo;