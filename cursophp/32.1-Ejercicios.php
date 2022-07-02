<?php

$i = 0;

function ascendente($i){
    echo "</br></br>Funcion ascendente </br></br>";
    for ($i=0; $i <=100 ; $i++) { 
        echo "$i ..";
    }
}

ascendente($i);

$i = 0;


function descendente($i){
    echo "</br></br>Funcion descendente </br></br>";
    for ($i=100; $i > 0 ; $i--) { 
        echo "$i ..";
    }
}

descendente($i);




/*function contador_asendente(){
    echo "<br><br>funcion asendente <br><br>";
    for ($i=0; $i <=100 ; $i++) { 
    echo "$i ..";
     }
}

function contador_desendente(){
    echo "<br><br>funcion desendente <br><br>";
    for ($i=100; $i >0 ; $i--) { 
    echo "$i ..";
    }
}
contador_asendente();
contador_desendente();*/