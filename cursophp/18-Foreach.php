<?php
/*El ciclo foreach nos extrae el contenido de un arreglo definiendonos su limite con la cantidad de datos que se encuentren dentro del arreglo tambien nos permite mostrar el espacio ocupado por cada dato y a su vez redefinir la variable para usarla dentro del ciclo*/ 

$Nombres =["Kevin","Arnoldo","Jefferson","Pamela","Gabriela"];#1 Declarar variables
#2- Definimos el ciclo foreach
foreach ($Nombres as $key => $nom) {#3- Definimos el arreglo, definimos los campos, y redefinimos el arreglo
    echo "$key","-------------------->","$nom";#mostramos los campos y el contenido del arreglo redefinido
    echo "</br>";
}