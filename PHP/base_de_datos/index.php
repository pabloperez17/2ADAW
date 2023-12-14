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
        $conexion -> close();
    ?>
    <h2>Busqueda de videojuego</h2>
    <form action="busqueda.php" method="POST">
    <input class="form-control" type="text" name="busqueda"></input>
    <input type="submit" value="Buscar">
    </form>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>