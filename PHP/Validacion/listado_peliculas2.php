<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado peliculas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <?php require './Validacion/peliculas.php' ?>
    <?php require '../objetos/pelicula.php' ?>
</head>

<body>
    <?php

    $sql = "SELECT * FROM peliculas";
    $resultado = $conexion->query($sql);
    $peliculas= [];

    while ($fila = $resultado->fetch_assoc()) {
        $peliculas[] = new Pelicula(
            $fila["id_pelicula"],
            $fila["titulo"],
            $fila["fecha_estreno"],
            $fila["edad_recomendada"]
        );
        array_push($peliculas, $nueva_pelicula);
    }
    $peliculas = array();
    $peliculas[] = new Pelicula(1, "Spiderman", "2020-01-01", "7");
    $peliculas[] = new Pelicula(2, "Spiderman2", "2020-01-01", "7");
    $peliculas[] = new Pelicula(3, "Spiderman3", "2020-01-01", "7");

    ?>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Fecha estreno</th>
                <th>Edad recomendada</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($peliculas as $pelicula) {
                echo "<tr>";
                echo "<td>" . $pelicula->id_pelicula . "</td>";
                echo "<td>" . $pelicula->titulo . "</td>";
                echo "<td>" . $pelicula->fecha_estreno . "</td>";
                echo "<td>" . $pelicula->edad_recomendada . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>