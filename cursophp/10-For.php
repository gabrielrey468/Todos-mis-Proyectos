<?php

/* La estructura de control for funciona de la siguiente manera:

    1- Nos deja ejecutar el ciclo definiendo su contador del mismo ciclo
    2- El avance del ciclo puede definirse junto a sus sentencias
    3- Nos facilita el uso del codigo teniendolo mas limpio

    */

    for ($i=20; $i >=0 ; $i--) { 
        echo "</br> $i";
    }
    echo "El ciclo for ha finalizado";