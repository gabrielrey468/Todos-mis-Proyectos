<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Formulario</title>
</head>
<body>
    <div class="contenedor">
        <form action="Validacion.php" method="post">
            <div class="titulo"><h2>Login</h2></div> 
            <br>
            <label for="">Correo</label>
            <br>
            <input type="email" name="email" id="" required>
            <br>
            <br>
            <label for="">Contraseña</label>
            <br>
            <input type="password" name="password" id="" required>
            <br><br>
            <button>INGRESAR</button>
        </form>
    </div>
</body>
</html>