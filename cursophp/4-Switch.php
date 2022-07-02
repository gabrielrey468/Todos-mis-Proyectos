<?php
/* Siempre la sentencia Switch tendra un valor(condicion) a evaluar, y tambien tendra diversos casos para comparar, si en dado caso los casos no son iguales a la condición este usara el valor defecto*/ 

$numero = 30;

switch ($numero) {
    case '10':
        echo "El numero que has ingresado y comparado es: $numero";
        break;
        case '20':
            echo "El numero que has ingresado y comparado es: $numero";
            break;
            case '30':
                echo "El numero que has ingresado y comparado es: $numero";
                break;
                case '40':
                    echo "El numero que has ingresado y comparado es: $numero";
                    break;
                    case '50':
                        echo "El numero que has ingresado y comparado es: $numero";
                        break;

    default:
        echo "El numero que has ingresado no se encuentra dentro del swith";
        break;
}