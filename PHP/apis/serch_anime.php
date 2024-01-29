<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search anime</title>
</head>
<body>
    <form action="" method="post">
        Titulo: <input type="text" name="titulo"><br><br>
        Numero:
        <select name="limit">
            <option value="" selcted>Sin limite</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select><br><br>
        Min valoracion:
        <select name="min" id="">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select><br><br>
        Max valoracion:
        <select name="max" id="">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select><br><br>
        <input type="submit" value="Buscar">
    </form>

    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $titulo = $_POST["titulo"];
        $titulo = preg_replace('/\s+/','+',$titulo);
        $limit = $_POST["limit"];
        $min = $_POST["min"];
        $max = $_POST["max"];
        //$apiUrl = "https://api.jikan.moe/v4/anime?sfw&q=$titulo&limit=$limit"; //buscador por nombre con limite
        $apiUrl = "https://api.jikan.moe/v4/anime?sfw&q=$titulo&limit=$limit&min_score=$min&max_score=$max"; //busca por nombre con limite y valoracion minima y maxima

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $apiUrl);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $respuesta = curl_exec($curl);
        $array = json_decode($respuesta, true);
        $animes = $array['data'];

        foreach($animes as $anime){ ?>
            <h1><?php echo $anime['title'] ?></h1>
            <p>
                <a href="show_anime.php?id=<?php echo $anime['mal_id'] ?>">Ver datalles</a>
            </p>
            <p><?php echo $anime ['score'] ?></p>
            <img src = "<?php echo $anime['images']['jpg']['image_url'] ?>">
        <?php }
    }
    ?>
</body>
</html>