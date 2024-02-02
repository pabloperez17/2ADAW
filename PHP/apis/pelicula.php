<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pelicula</title>
</head>
<body>
    <form action="" method="post">
    <?php
    $apiUrl = "http://localhost:8000/api/films";

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $apiUrl);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $respuesta = curl_exec($curl);
    $array = json_decode($respuesta, true);

    $peliculas = $array['data'];
    
    foreach($peliculas as $pelicula){ ?>
        <h1><?php echo "Id de pelicula: " . $pelicula['film_id'] ?></h1>
        <br><br>
        <input type="submit" value="Mostrar pelicula">
    <?php }
    ?>
    </form>
    <?php

    if($_SERVER["REQUEST_METHOD"] == "POST") {
    $film_id = $_POST["film_id"];
    $apiUrl = "http://localhost:8000/api/films/$film_id";

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $apiUrl);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $respuesta = curl_exec($curl);
    $array = json_decode($respuesta, true);

    ?>
        <h1><?php echo "Id de pelicula: " . $pelicula['film_id'] ?></h1>
        <h3><?php echo "Titulo: " . $pelicula['title'] ?></h3>
        <p><?php echo "Duración: " . $pelicula['duration'] ?></p>
        <p><?php echo "Edad recomendada: " . $pelicula['age_rating'] ?></p>
    <?php
    }
    ?>
</body>
</html>
