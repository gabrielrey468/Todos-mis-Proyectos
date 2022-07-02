<?php
/* La instrucción continue nos saltaba cierta linea de codigo o instruccion permitiendose ejecutar una linea distinta*/ 

for ($i=0; $i <=20 ; $i++) { #iniciamos el contador, variable etc...
    if (($i%2)== 0) {#evaluar si el numero es multiplo de 2
        continue; #Saltarse los numeros que al dividirse entre si su residuo es 0 este no se contara
    }
    echo $i;#mostrar la variable 
    echo "</br>";#salto de linea
}