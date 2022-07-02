<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PeliculaController extends Controller
{


    public function index($pagina = 1)
    {
        $titulo = 'Listado de mis peliculas';

        return view('peliculas.index', [
            'titulo' => $titulo,
            'pagina' => $pagina
        ]);
    }

    public function detalle($year = null){
        return view("/peliculas.detalle");
    }

    public function redirigir(){
        return redirect()->route('detalle.peliculas');
    }

    public function formulario(){
        return view("/peliculas.formulario");
    }

    public function recibir(Request $request){
        $nombre = $request->input('nombre');
        $email = $request->input('email');

        return "El nombre es: $nombre y el email es: $email";
    }
}
