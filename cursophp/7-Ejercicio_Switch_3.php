<?php
/* Realizar un programa el cual me diga si el nombre digitado esta en la lista de alumnos*/ 

//1- Declaracion de variable
$estudiante = "Jouse";

//2- Iniciamos el Switch
switch ($estudiante/*3- variable a comparar*/) {

    //4- Empezando la comparacion
    #5- Comparacion Mayusculas
    case'Jefferson';
    echo "el estudiante $estudiante se encuentra en la lista de estudiantes";
    break;
        case'Jouse';
        echo "el estudiante $estudiante se encuentra en la lista de estudiantes";
        break;
            case'Fernando';
            echo "el estudiante $estudiante se encuentra en la lista de estudiantes";
            break;
                case'Luis';
                echo "el estudiante $estudiante se encuentra en la lista de estudiantes";
                break;
                    case'Maria';
                    echo "el estudiante $estudiante se encuentra en la lista de estudiantes";
                    break;
                        case'Matalia';
                        echo "el estudiante $estudiante se encuentra en la lista de estudiantes";
                        break;

#6- Casos con Minusculas
case'Jefferson';
    echo "el estudiante $estudiante se encuentra en la lista de estudiantes";
    break;
        case'Jouse';
        echo "el estudiante $estudiante se encuentra en la lista de estudiantes";
        break;
            case'Fernando';
            echo "el estudiante $estudiante se encuentra en la lista de estudiantes";
            break;
                case'Luis';
                echo "el estudiante $estudiante se encuentra en la lista de estudiantes";
                break;
                    case'Maria';
                    echo "el estudiante $estudiante se encuentra en la lista de estudiantes";
                    break;
                        case'Matalia';
                        echo "el estudiante $estudiante se encuentra en la lista de estudiantes";
                        break;
    #7- Caso por defecto (Estudiante no encontrado)
default:
    echo "El estudiante $estudiante no se encuentra en la lista de estudiantes </br>";
    echo "Intentelo nuevamente";
    break;
}