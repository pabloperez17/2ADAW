<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nasa</title>
</head>
<body>
    <?php
    $apiUrl = "https://api.nasa.gov/planetary/apod";
    $apikey = "ZEAbAhN54dUL1jFBT4GCBPSfB6imkhD9GYMhaj9H";

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $apiUrl);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    curl_setopt($curl, CURLOPT_USERPWD, $apikey . ":");
    $respuesta = curl_exec($curl);
    $array = json_decode($respuesta, true);

    print_r($array)
    ?>
    <h1><?php echo $array['title'] ?></h1>
    <p><?php echo $array['date'] ?></p>
    <img src = "<?php echo $array['url'] ?>">
    <p><b>Explanation: </b><?php echo $array['explanation'] ?></p>
</body>
</html>