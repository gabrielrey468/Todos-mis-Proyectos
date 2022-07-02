<?php

/*El break sirve para detener el flujo del codigo en un momento determinado*/
/*Realizar las tablas de multiplicar que se detengan en el numero 5*/


$tabla = 10;
$Multiplicacion = "";
/*while ($i <= 10) {
    if ($i > 5) {
        break;
    }
    $Multiplicacion = $tabla*$i;
    echo "$tabla x $i = $Multiplicacion";
    echo "</br></br>";
    $i++;
}*/

for ($i=0; $i <=10 ; $i++) { 
    if ($i > 8) {
    break;
    }
    $Multiplicacion = $tabla*$i;
    echo "$tabla x $i = $Multiplicacion";
    echo "</br></br>";

}