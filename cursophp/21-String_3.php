<?php
/*Realizar un texto el cual se pueda buscar la posicion de una pantalla y me muestre en pantalla esa posicion*/ 

$Enunciado = "Hola soy un estudiante de la plataforma de aprendizaje Udemy, En esta ocasion vengo a contarles mi experiencia dentro de esta plataforma, y decirles que es mi primera biografia como estudiante, recomendando una pagina de aprendizaje que abre muchas puertas al futuro laboral";

echo $Enunciado;

$Busqueda = "aprendizaje";
echo "</br></br>";
echo strpos($Enunciado,$Busqueda);