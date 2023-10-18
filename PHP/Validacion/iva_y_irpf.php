<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php require "../Funciones/ejercicio_irpf.php"; ?>
    <?php require "../Funciones/ejercicio_iva.php"; ?>
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
        if ($_POST["action"] == "iva") {
            $temp_precioNeto = depurar($_POST["precioNeto"]);
            $temp_tipoIVA = depurar($_POST["tipoIVA"]);
            if (strlen($temp_precioNeto) > 0) {
                if (is_numeric($temp_precioNeto)) {
                    $temp_precioNeto = (int)$temp_precioNeto;
                    if ($temp_precioNeto >= 0) {
                        $precioNeto = $temp_precioNeto;
                        $tipoIVA = $temp_tipoIVA;
                    } else {
                        $error_precioNeto = "El numero debe ser mayor o igual a 0";
                    }
                } else {
                    $error_precioNeto = "Introduzca un valor numerico";
                }
            } else {
                $error_precioNeto = "No se ha introducido el precio en neto";
            }
        }
    }
    ?>
    <div>
        <fieldset>
            <legend><h1>Formulario IVA</h1></legend>
            <form method="post" action="">
                <label for="precioNeto">Precio sin IVA</label>
                <br>
                <input name="precioNeto" type="number" step="0.1">
                <br><br>
                <label for="tipoIVA">Tipo IVA</label>
                <br>
                <select name="tipoIVA">
                    <option value="GENERAL">General</option>
                    <option value="REDUCIDO">Reducido</option>
                    <option value="SUPERREDUCIDO">Superreducido</option>
                    <option value="SINIVA">Sin IVA</option>
                </select>
                <input type="hidden" name="action" value="iva">
                <br><br>
                <input type="submit" value="Calcular">
                <br>
                <?php
                if (isset($precioNeto) && isset($tipoIVA)) {
                    echo "<h3>El precio con IVA es: " . precioConIva($precioNeto, $tipoIVA) . "</h3>";
                } else {
                    if (isset($error_precioNeto)) {
                        echo $error_precioNeto;
                    }
                }
                ?>
            </form>
        </fieldset>
        <br><br>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if ($_POST["action"] == "irpf") {
                $temp_salario = depurar($_POST["salario"]);
                if (strlen($temp_salario) > 0) {
                    if (is_numeric($temp_salario)) {
                        $temp_salario = (int)$temp_salario;
                        if ($temp_salario >= 0) {
                            $salario = $temp_salario;
                        } else {
                            $error_salario = "Error no es un numero mayor que 0";
                        }
                    } else {
                        $error_salario = "Error no es un numero";
                    }
                } else {
                    $error_salario = "Error debes meter un numero";
                }
            }
        }
        ?>
        <fieldset>
            <legend><h1>Formulario IRPF</h1></legend>
            <form method="post" action="">
                <label for="salario">Salario</label>
                <br>
                <input name="salario" type="number" step="100">
                <br><br>
                <input type="hidden" name="action" value="irpf">
                <input type="submit" value="Calcular">
                <?php
                if (isset($salario)) {
                    echo "El salario descotando el IRPF es: " . calcularIRPF($salario);
                } else {
                    if (isset($error_salario)) {
                        echo $error_salario;
                    }
                }
                ?>
        </fieldset>
        </form>
    </div>
</body>

</html>