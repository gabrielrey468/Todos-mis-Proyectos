<?php

function autocargar($classname){
    include './controllers/usuariocontroller.php' . $classname . '.php';
}

spl_autoload_register('autocargar');