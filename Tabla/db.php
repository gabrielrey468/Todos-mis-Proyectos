<?php
$conexion = mysqli_connect('localhost','root','','tabla');

if($conexion);

else{
    echo mysqli_error();
}