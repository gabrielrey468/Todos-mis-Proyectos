<?php

/* Realizar un programa el cual me omita lo que es un numero en especifico*/ 

$i = 0;

while ($i <= 20) {
    if ($i == 7) {
        $i++;
        continue;
    }
    echo $i;
    echo "</br>";
    $i++;
}