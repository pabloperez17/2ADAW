<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pruebas películas</title>
    <?php require "../objetos/pelicula.php"?>
</head>
<body>
    <?php
    /*
    - CREAR 3 PELICULAS Y AÑADIRLAS A UN ARRAY "PELICULAS"
    - MEDIANTE UN FOREACH MOSTRAMOS TODAS LAS PELICULAS EN UNA TABLA
    */
    $peliculas = array();
    $peliculas[] = new Pelicula(1, "Spiderman", "2020-01-01", "7");
    $peliculas[] = new Pelicula(2, "Spiderman2", "2020-01-01", "7");
    $peliculas[] = new Pelicula(3, "Spiderman3", "2020-01-01", "7");

    echo "<table border='1'>";
    echo "<tr>";
    echo "<th>Id</th>";
    echo "<th>Título</th>";
    echo "<th>Fecha estreno</th>";
    echo "<th>Edad recomendada</th>";
    echo "</tr>";

    foreach ($peliculas as $pelicula) {
        echo "<tr>";
        echo "<td>" . $pelicula -> id_pelicula . "</td>";
        echo "<td>" . $pelicula -> titulo . "</td>";
        echo "<td>" . $pelicula -> fecha_estreno . "</td>";
        echo "<td>" . $pelicula -> edad_recomendada . "</td>";
        echo "</tr>";
    }
    ?>
</body>
</html>