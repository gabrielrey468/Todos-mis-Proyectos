<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fomr1</title>
</head>
<body>
    <form action="">
        <label for="">Nombre</label>
        <input type="text" name="nombre">
        <br>
        <br>
        <label for="">Apellido</label>
        <input type="text" name="apellido">
        <br>
        <button>Enviar</button>
    </form>
<?php
$nombre = $_GET['nombre'];
$apellido = $_GET['apellido'];
?>
<h2><?php echo "$nombre y $apellido";?></h2>


</body>
</html>