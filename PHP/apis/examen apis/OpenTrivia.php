<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OpenTrvia</title>
</head>
<body>
    <form action="" method="post">
        Cantidad de preguntas: 
        <input type="text" name="num_preguntas"><br><br>
        Categoría: 
        <select name="categoria">
            <option value="23">Historia</option> 
            <option value="22">Geografia</option> 
            <option value="27">Animales</option> 
            <option value="15">Videojuegos</option> 
        </select><br><br>
        Dificuldad:
        <select name="dificultad">
            <option value="easy">Fácil</option>
            <option value="medium">Normal</option>
            <option value="hard">Difícil</option>
        </select><br><br>
        <input type="submit" value="Buscar">
    </form>
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $num_preguntas = $_POST["num_preguntas"];
        $categoria = $_POST["categoria"];
        $dificultad = $_POST["dificultad"];

        $apiUrl="https://opentdb.com/api.php?amount=$num_preguntas&category=$categoria&difficulty=$dificultad";

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $apiUrl);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $respuesta = curl_exec($curl);
        $array = json_decode($respuesta, true);
        $preguntas = $array['results'];

        foreach($preguntas as $pregunta){ ?>
            <h3><?php echo $pregunta['question'] ?></h3>
            <p style="color:green;"><?php echo $pregunta['correct_answer'] ?></p>
            <?php
            foreach($pregunta['incorrect_answers'] as $preguntas_incorrectas) { ?>
                <p style="color:red;"><?php echo $preguntas_incorrectas ?></p>
            <?php 
            }
        }
    }
    ?>
</body>
</html>