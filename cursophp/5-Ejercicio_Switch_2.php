<?php
/*Realiza una maquina exprendedora*/ 
$opcion="te";

switch ($opcion) {
    case 'Churros':
        echo "El producto $opcion ha sido entregado correctamente";
        break;
        case 'Sodas':
            echo "El producto $opcion ha sido entregado correctamente";
            break;
            case 'Dulces':
                echo "El producto $opcion ha sido entregado correctamente";
                break;
                case 'Chocolates':
                    echo "El producto $opcion ha sido entregado correctamente";
                    break;
                    case 'Galletas':
                        echo "El producto $opcion ha sido entregado correctamente";
                        break;
                        case 'churros':
                            echo "El producto $opcion ha sido entregado correctamente";
                            break;
                            case 'sodas':
                                echo "El producto $opcion ha sido entregado correctamente";
                                break;
                                case 'dulces':
                                    echo "El producto $opcion ha sido entregado correctamente";
                                    break;
                                    case 'chocolates':
                                        echo "El producto $opcion ha sido entregado correctamente";
                                        break;
                                        case 'galletas':
                                            echo "El producto $opcion ha sido entregado correctamente";
                                            break;

    default:
        echo "El producto ingresado no se encuentra en la lista de alimentos";
        break;
}