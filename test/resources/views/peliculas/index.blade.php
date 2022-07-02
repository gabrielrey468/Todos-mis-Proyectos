<h1>{{$titulo}}</h1>
<p>(accion index del controlador PeliculaController)</p>

@if(isset($pagina))
<h3>La pagina es {{$pagina}}</h3>
@endif

<a href="{{ route('detalle.peliculas', ['id' => 12]) }}">Ir al detalle</a>