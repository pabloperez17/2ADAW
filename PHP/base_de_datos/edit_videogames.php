<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar videojuegos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <?php require 'database_conection.php' ?>
</head>
<body>
    <?php
    if(!isset($_GET["titulo"])) header('location: index.php');

    if($_SERVER["REQUEST_METHOD"] == "GET"){
        $titulo = $_GET["titulo"];

        $sql = $conexion -> prepare("SELECT * FROM videojuegos WHERE titulo = ?");
        $sql -> bind_param("s", $titulo);
        $sql -> execute();
        $resultado = $sql -> get_result();
        
        $fila = $resultado -> fetch_assoc();
        $conexion -> close();
        
        $distribuidora = $fila["distribuidora"];
        $precio = $fila["precio"];
    }

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $titulo_original = $_POST["titulo_original"];
        $distribuidora = $_POST["distribuidora"];
        $precio = $_POST["precio"];

        $sql = $conexion -> prepare("UPDATE videojuegos SET titulo = ?, distribuidora = ?, precio = ? WHERE titulo = ?");
        $sql -> bind_param("ssds", $titulo, $distribuidora, $precio, $titulo_original);
        $sql -> execute();
        header('location: index.php');
    }
    ?>
    <div class="container">
    <form action="" method="post">
        <h1>EDITAR VIdeojugo</h1>
        <input type="hidden" name="titulo_original" value="<?php echo $titulo ?>">
        <div class="mb-3">
            <label class="form-label">Titulo</label>
            <input class="form-control" type="text" name="titulo" value="<?php echo $titulo ?>"></input>
        </div>
        <div class="mb-3">
            <label class="form-label">Distribuidora</label>
            <input class="form-control" type="text" name="distribuidora" value="<?php echo $distribuidora ?>"></input>
        </div>
        <div class="mb-3">
            <label class="form-label">Precio</label>
            <input class="form-control" type="number" step="0.1" name="precio" value="<?php echo $precio ?>"></input>
        </div>
        <input class="btn btn-secondary" type="submit" value="Editar">
    </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>