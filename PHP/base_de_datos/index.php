<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla videojuegos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <?php require 'database_conection.php' ?>
</head>
<body>
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $titulo = '%' . $_POST["titulo"] . '%';
        $columna = $_POST["columna"];
        $orden = $_POST["orden"];
        $distribuidoras = $_POST["distribuidora"] ?? "";
        $busqueda = "titulo";

        if(empty($_POST["rango1"])){
            $_POST["rango1"] = PHP_FLOAT_MIN;
        }

        if(empty($_POST["rango2"])){
            $_POST["rango2"] = PHP_FLOAT_MAX;
        }

        if($campo == "distribuidora"){
            $busqueda = "distribuidora";
        }

        if($distribuidoras != ""){
            $seleccionadas = "and distribuidora in ('".implode("','",$distribuidoras)."')";
        }

        $rango1 = $_POST["rango1"];
        $rango2 = $_POST["rango2"];

        $sql = $conexion->prepare("Select * from videojuegos where $busqueda like CONCAT ('%',?,'%') and precio between $rango1 and $rango2 $seleccionadas order by $campo $orden");
        $stmt = $conexion -> prepare($sql);
        $stmt -> bind_param("s", $titulo);
        $stmt -> execute();
        $resultado = $stmt -> get_result();
        $conexion -> close();
    }

    if($_SERVER["REQUEST_METHOD"] == "GET") {
        $sql = $conexion -> prepare("SELECT * FROM videojuegos");
        $sql -> execute();
        $resultado = $sql -> get_result();
        $conexion -> close();
    }

    ?>
    <div class="container">
        <h2>Busqueda de videojuego</h2>
        <form action="" method="POST">
            <div class="row mb-3">
                <div class="col-4">
                    <input class="form-control" type="text" id="titulo" name="titulo">
                </div>
                <div class="col-2">
                    <input class="btn btn-primary" type="submit" value="Buscar">
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-1">
                    <label class="form-label">Filtrar</label>
                </div>
                <div class="col-3">
                    <select class="form-select" name="columna">
                        <option value="titulo" selected>Titulo</option>
                        <option value="distribuidora">Distribuidora</option>
                        <option value="precio">Precio</option>
                    </select>
                </div>
                <div class="col-3">
                    <select class="form-select" name="orden">
                        <option value="asc" selected>Ascendente</option>
                        <option value="desc">Descendente</option>
                    </select>
                </div>
                <div class="row mb-3">
                    <input type="text" name="rango1" placeholder="rango 1">
                    <input type="text" name="rango2" placeholder="rango 2">
                </div>
            </div>
        </form>
    </div>
    <div class="container">
        <h2 class="text-center mb-3">Lista de videojuegos</h2>
        <div>
            <table class=" container table table-striped table-hover">
                <thead class="table table-dark">
                    <tr>
                        <th>Titulo</th>
                        <th>Distribuidora</th>
                        <th>Precio</th>
                        <th>Mostrar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while( $fila = $resultado -> fetch_assoc()){
                            echo "<tr>";
                            echo "<td> $fila[titulo] </td>";
                            echo "<td> $fila[distribuidora] </td>";
                            echo "<td> $fila[precio] </td>";
                            ?>
                            <td>
                                <form action="view_videogames.php" method="get">
                                    <input type="hidden" name="titulo" value="<?php echo $fila["titulo"] ?>">
                                    <input class="btn btn-secondary" type="submit" value="Ver">
                                </form>
                            </td>
                            <td>
                                <form action="delete_videogames.php" method="get">
                                    <input type="hidden" name="titulo" value="<?php echo $fila["titulo"] ?>">
                                    <input class="btn btn-danger" type="submit" value="Borrar">
                                </form>
                            </td>
                            </tr>
                        <?php
                        }
                        ?>
                </tbody>
            </table>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>