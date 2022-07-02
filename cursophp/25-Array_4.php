<?php
/*Vamos a aprender diferentes formas de declarar un array*/ 

$Canales = ["Canal 2","Canal 4","Canal 8","Canal 12"];#Forma tradicional

foreach ($Canales as $key => $Canal) {
    echo "$key--------------$Canal";
    echo "</br>";
}
echo "</br>";

#Forma uno por uno

$Nombre[]= "Diego";

var_dump($Nombre);
echo "</br>";
echo "</br>";
$Nombre2[9]="Alicia";
var_dump($Nombre2);
echo $Canales[0];
echo "</br>";
echo $Canales[1];
echo "</br>";
echo $Canales[2];
echo "</br>";
echo $Canales[3];
echo "</br>";
echo $Canales[3]="Canal Fox";
