<?php
/*Else if vendria siendo o se denomina como una opcion secundaria a la if*/

/* Si un numero es mayor, igual o menor a 10 ¿Que tengo que hacer?*/

$numero = -3;

if ($numero == 10) {
    echo "El numero ingresado es igual a 10";
}

elseif ($numero > 10) {
    echo "El numero ingresado es mayor a 10";
}

elseif ($numero <10 && $numero > 0){
    echo "El numero ingresado es menor a 10";
}

elseif ($numero < 0){
    echo "El valor ingresado es negativo";
}
