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
        $sql = $conexion -> prepare("SELECT * FROM videojuegos");
        $sql -> execute();
        $resultado = $sql -> get_result();
       
    ?>
    <div class="container">
        <h2>Busqueda de videojuego</h2>
        <form action="busqueda.php" method="POST">
            <div class="row mb-3">
                <div class="col-4">
                    <input class="form-control" type="text" id="palabras" name="palabras">
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
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while( $fila = $resultado -> fetch_assoc()){
                            echo "<tr>";
                            echo "<td> $fila[titulo] </td>";
                            echo "<td> $fila[distribuidora] </td>";
                            echo "<td> $fila[precio] </td>";
                            echo "</tr>";
                        }
                        ?>
                </tbody>
            </table>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>