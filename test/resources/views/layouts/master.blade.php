<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Titulo - @yield('titulo')</title>
</head>

<body>
    @section('header')
    <h1>CABECERA DE LA WED (master)</h1>
    @show
    <hr>

    <div class="container">
        @yield('content')
    </div>
    <hr>

    @section('footer')
    PIE DE PAGINA DE LA WED (master)
    @show
</body>

</html>