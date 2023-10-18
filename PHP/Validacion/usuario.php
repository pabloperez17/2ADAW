<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario</title>
</head>

<body>
    <?php
    function depurar($entrada)
    {
        $salida = htmlspecialchars($entrada);
        $salida = trim($salida);
        return $salida;
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $temp_nombre = depurar($_POST["usuario"]);
        $temp_apellido = depurar($_POST["apellido"]);
        $temp_edad = depurar($_POST["edad"]);

        if (!strlen($temp_nombre) > 0) {
            $error_nombre = "El nombre de usuario es obligatorio";
        } else {
            $patron = "/^[a-zA-Z][a-zA-Z ]{2,30}$/";
            if (!preg_match($patron, $temp_nombre)) {
                $error_nombre = "El nombre debe tener entre 2 y 30 carcteres y contener solamente letras o numeros";
            }
        }

        if (!strlen($temp_apellido) > 0) {
            $error_apellido = "El apellido de usuario es obligatorio";
        } else {
            $patron = "/^[a-zA-Z][a-zA-Z ]{2,30}$/";
            if (!preg_match($patron, $temp_apellido)) {
                $error_apellido = "El apellido debe tener entre 2 y 30 carcteres y contener solamente letras o numeros";
            }
        }
    }
    ?>
    <form action="" method="post">
        <fieldset>
            <legend><h3>USUARIO</h3></legend>
            <label>Nombre: </label>
            <input type="text" name="usuario">
            <?php if (isset($error_nombre)) echo $error_nombre ?>
            <br><br>
            <label>Apellido: </label>
            <input type="text" name="apellido">
            <?php if (isset($error_apellido)) echo $error_apellido ?>
            <br><br>
            <label>Edad: </label>
            <input type="date" name="edad">
            <?php if (isset($error_edad)) echo $error_edad ?>
            <br><br>
            <input type="submit" value="Registrarse">
            <br><br>
            <?php
             if (preg_match($patron, $temp_nombre)) {
                $nombre = $temp_nombre;
                $nombre = ucwords($nombre, " ");
                echo  "Nombre: " . $nombre;
            }
            ?>
            <br><br>
            <?php
            if (preg_match($patron, $temp_apellido)) {
                $apellido = $temp_apellido;
                $apellido = ucfirst($apellido);
                echo "Apellido: " . $apellido;
            }
            ?>
        </fieldset>
    </form>
</body>

</html>