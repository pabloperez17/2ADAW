<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busqueda de videojugos</title>
    <?php require 'database_conection.php' ?>
    <?php require 'index.php' ?>
</head>
<body>
    <?php 
    $_POST["busqueda"]

        $duplicado = "SELECT * FROM videojuegos WHERE busqueda = '$titulo'";

        if ($conexion -> query($duplicado) -> num_rows > 0) {
            echo" $duplicado";
        } else {
            echo "El videojuego no esta en la lista o esta mal escrito";
        } 
    ?>
</body>
</html>