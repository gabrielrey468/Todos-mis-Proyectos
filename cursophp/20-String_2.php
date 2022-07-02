<?php
/*ealizar un programa el cual me omita lo que es un numero en especifico*/ 

$j = 5;
    for ($i=0; $i <=20 ; $i++) { 
        if ($i == $j) {
            continue;
        }
        echo $i;
        echo "<br>";
    }