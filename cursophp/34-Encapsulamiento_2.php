<?php

/* El nivel de acceso private me permite acceder a la variable, clase o funcion en el mismo archivo dentro de la clase definida pero no directamente desde otro archivo, pero si podemos hacerlo de forma indirecta*/ 


class Maestro {
    
    private $codigo_maestro;
    public  $nombre;
    public  $edad;
    public  $Salon_Asignado;

    public function Datos_maestro($nombre,$edad,$Salon_Asignado,$codigo_maestro){
$this->nombre = $nombre;
$this->edad = $edad;
$this->salon = $Salon_Asignado;
$this->codigo = $codigo_maestro;

echo "El maestro: $nombre con la edad de $edad tiene asignado el salon de: $Salon_Asignado y su codigo de maestro es: $codigo_maestro";
    }
}

$reporte = new Maestro();

$reporte->Datos_maestro("Jackson Enrique Diaz",25,"Primer año de bachillerato",432765);

echo "</br>";
echo $reporte->codigo;