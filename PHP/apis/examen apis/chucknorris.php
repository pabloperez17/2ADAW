<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chuck norris</title>
</head>
<body>
    <form action="" method="post">
        <h2>Eligue la categoria del chiste:</h2>
        <select name="categoria">
        <?php
            $apiUrl = "https://api.chucknorris.io/jokes/categories";

            $curl = curl_init();
            curl_setopt($curl, CURLOPT_URL, $apiUrl);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            $respuesta = curl_exec($curl);
            $array = json_decode($respuesta, true);
            $categories = $array;
            foreach($categories as  $categorie) { ?>
                <option value="<?php echo $categorie ?>"><?php echo $categorie ?></option>
            <?php
            }
        ?>
        </select>
        <br><br>
        <input type="submit" value="Buscar">
    </form>
    <?php

    if($_SERVER["REQUEST_METHOD"] == "POST") {
    $categoria = $_POST["categoria"];
    $apiUrl = "https://api.chucknorris.io/jokes/random?category=$categoria";

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $apiUrl);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $respuesta = curl_exec($curl);
    $array = json_decode($respuesta, true);

    ?>
    <p><?php echo $array['value'] ?></p>
    <?php
    }
    ?>
</body>
</html>