<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perro</title>
</head>
<body>
    <?php
    $apiUrl = "https://api.chucknorris.io/jokes/random?category={category}";

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $apiUrl);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $respuesta = curl_exec($curl);
    $array = json_decode($respuesta, true);

    ?>
    <h1><?php echo "Tu chiste aleatorio aleatorio" ?></h1>
    <img src = "<?php echo $array['message'] ?>">
</body>
</html>