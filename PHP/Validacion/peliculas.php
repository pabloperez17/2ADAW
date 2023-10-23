<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peliculas</title>
    <?php require '../Funciones/base_de_datos_peliculas.php' ?>
</head>
<body>
    <?php
    function depurar($entrada) {
        $salida = htmlspecialchars($entrada);
        $salida = trim($salida);
        return $salida;
    }

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $temp_id = depurar($_POST["id"]);
        $temp_titulo = depurar($_POST["titulo"]);
        $temp_fecha_estreno = depurar($_POST["fecha_estreno"]);
        $temp_edad_recomendada = depurar($_POST["edad_recomendada"]);
    }

    #   Validacion ID
    if(!strlen($temp_id) > 0) {
        $err_id = "El id es obligatorio";
    } else {
        $patron = "/^[0-9]{1,8}$/";
        if(!preg_match($patron, $temp_titulo)) {
            $err_id = "El id debe tener entre 1 y 8 caracteres
                y contener solamente números";
        } else {
            $id = $temp_id;
            echo $id;
        }
    }

    #   Validación titulo
    if(!strlen($temp_titulo) > 0) {
        $err_titulo = "El titulo es obligatorio";
    } else {
        $patron = "/^[a-zA-Z0-9]{1,80}$/";
        if(!preg_match($patron, $temp_titulo)) {
            $err_titulo = "El titulo debe tener entre 1 y 80 caracteres
                y contener solamente letras o números";
        } else {
            $titulo = $temp_titulo;
            echo $titulo;
        }
    }

    #   Validación fecha de estreno
    if(strlen($temp_fecha_estreno) == 0) {
        $err_fecha_estreno = "La fecha de estreno es obligatoria";
    } else {
        list($anyo, $mes, $dia) = explode('-', $temp_fecha_estreno);
        if($anyo < 1895) {
            $err_fecha_estreno = "No puede es anterior a la primera pelicula";
        } else {
            $fecha_estreno = $temp_fecha_estreno;
        }
    }
    ?>
    <form action="" method="post">
        <fieldset>
            <label>Id pelicula: </label>
            <input type="number" name="id">
            <?php if(isset($err_id)) echo $err_id ?>
            <br><br>
            <label>Titulo: </label>
            <input type="text" name="titulo">
            <?php if(isset($err_titulo)) echo $err_titulo ?>
            <br><br>
            <label>Fecha de estreno: </label>
            <input type="date" name="fecha_esrteno">
            <?php if(isset($err_fecha_estreno)) echo $err_fecha_estreno ?>
            <br><br>
                <label for="">Edad recomendada: </label>
                <br>
                <input type="radio" name="U0" value="0">
                <label for="">0</label>
                <br>
                <input type="radio" name="U3" value="3">
                <label for="">3</label>
                <br>
                <input type="radio" name="U7" value="7">
                <label for="">7</label>
                <br>
                <input type="radio" name="U12" value="12">
                <label for="">12</label>
                <br>
                <input type="radio" name="U16" value="16">
                <label for="">16</label>
                <br>
                <input type="radio" name="U18" value="18">
                <label for="">18</label>
                <br>
            <br><br>
            <input type="submit" value="Registrarse">
        </fieldset>
    </form>

    <?php
    if(isset($id) && isset($titulo) && isset($err_fecha_estreno) && isset($edad_recomendada)) {

        echo "<h3>Id pelicula: $id</h3>";
        echo "<h3>Titulo: $titulo</h3>";
        echo "<h3>Fecha estreno: $fecha_estreno</h3>";
        echo "<h3>Edad recomendada: $edad_recomendada</h3>";

        $sql = "INSERT INTO peliculas (id_peliculas, titulo, fecha_estreno, edad_recomendada) VALUES ('$id', '$titulo', '$fecha_estreno', '$edad_recomendada')";

        $conexion -> query($sql);
    }
    ?>
</body>
</html>