<h1>Bienvenido a mi wed con MVC</h1>

<?php
require_once './autoload.php';

if (isset($_GET['controller'])) {
    $nombre_controlador = $_GET['controller'] . 'controller';
    var_dump($nombre_controlador);
} else {
    echo "La pagina no existe";
    exit();
}

if (isset($_GET['controller']) && class_exists($_GET['controller'])) {


    $controlador = new $nombre_controlador();


    if (isset($_GET['action']) && method_exists($controlador, $_GET['action'])) {
        $action = $_GET['action'];
        $controlador->$action();
    } else {
        echo "La pagina que buscas no existe 1";
        var_dump($action);
    }
} else {
    echo "La pagina que buscas no existe 2";
}
