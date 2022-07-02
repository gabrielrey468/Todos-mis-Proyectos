<?php

/*El break es una instruccion que nos permite detener el codigo en cierto punto siempre y cuando se cumpla una condicion*/

for ($i=0; $i <=20 ; $i++) { 
    if ($i == 10) {
        break;
    }
    echo "$i </br>";
}

$letra = "c";
switch ($letra) {
    case 'a':
        echo "$letra";
        break;
        case 'b':
            echo "$letra";
            break;
    
    default:
        echo "No se encontro el resultado";
        break;
}