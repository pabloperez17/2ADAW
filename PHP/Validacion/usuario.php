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
        $temp_usuario = depurar($_POST["usuario"]);
        $temp_edad = depurar($_POST["edad"]);
        $temp_nombre = depurar($_POST["nombre"]);
        $temp_apellido = depurar($_POST["apellido"]);
        $temp_fecha_nacimiento = depurar($_POST["fecha_nacimiento"]);

        if (!strlen($temp_usuario) > 0) {
            $error_usuario = "El usuario es obligatorio";
        } else {
            $patron1 = "/^[a-zA-Z0-9]{4,15}$/";
            if (!preg_match($patron1, $temp_usuario)) {
                $error_usuario = "El usuario debe tener entre 4 y 8 carcteres y contener solamente letras o numeros";
            }
        }

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

        if (strlen($temp_fecha_nacimiento) == 0) {
            $error_fecha_nacimeinto = "La fecha de nacimiento es obligatoria";
        } else {
            $fecha_actual = date ("Y-m-d");
            list($año_actual, $mes_actual, $dia_actual) = explode('-', $fecha_actual);
            list($año, $mes, $dia) = explode('-', $temp_fecha_nacimiento);
            if($año_actual - $año > 18){
                // es mayor de edad
            } else if($año_actual - $año < 18){
                $error_fecha_nacimiento = "No puedes ser menor de edad";
            }else{
                if($mes_actual -$mes > 0){
                    //es mayor de edad
                } else if($mes_actual - $mes < 0){
                    $error_fecha_nacimiento = "No puedes ser menor de edad";
                } else {
                    if($dia_actual -$dia >= 0){
                        //es mayor de edad
                    } else if($dia_actual -$dia < 0) {
                        $error_fecha_nacimiento = "No puedes ser menor de edad";
                    }
                }
            }
        }
    }
    ?>
    <form action="" method="post">
        <fieldset>
            <legend>
                <h3>USUARIO</h3>
            </legend>
            <label>Usuario: </label>
            <input type="text" name="usuario">
            <?php if (isset($error_usuario)) echo $error_usuario ?>
            <br><br>
            <label>Edad: </label>
            <input type="text" name="edad">
            <br><br>
            <label>Nombre: </label>
            <input type="text" name ="nombre">
            <?php if (isset($error_nombre)) echo $error_nombre ?>
            <br><br>
            <label>Apellido: </label>
            <input type="text" name="apellido">
            <?php if (isset($error_apellido)) echo $error_apellido ?>
            <br><br>
            <label>Fecha de nacimiento: </label>
            <input type="date" name="fecha_nacimiento">
            <?php if (isset($error_fecha_nacimeinto)) echo $error_fecha_nacimeinto ?>
            <br><br>
            <input type="submit" value="Registrarse">
            <br><br>
            <?php
            if (preg_match($patron1, $temp_usuario)) {
                $usuario = $temp_usuario;
                echo  "Usuario: " . $usuario;
            }
            ?>
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