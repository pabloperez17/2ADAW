<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pablo Pérez Iza</title>
    <?php require "funciones.php"; ?>
</head>

<body>
    <form action="" method="post">
        <fieldset>
            <div>
                <legend>Ejercicio 1</legend>
                <input type="number" name="numero" min="0">
                <br>
                <input type="radio" name="U1" value="EURO">
                <label for="">EURO</label>
                <br>
                <input type="radio" name="U1" value="DOLAR">
                <label for="">DOLAR</label>
                <br>
                <input type="radio" name="U1" value="YEN">
                <label for="">YEN</label>
                <br>
            </div>
            <br>
            <div>
                <input type="radio" name="U2" value="EURO">
                <label for="">EURO</label>
                <br>
                <input type="radio" name="U2" value="DOLAR">
                <label for="">DOLAR</label>
                <br>
                <input type="radio" name="U2" value="YEN">
                <label for="">YEN</label>
                <br>
            </div>
            <br>
            <div>
                <input type="hidden" name="action" value="dinero">
                <input type="submit" value="Enviar">
                <br><br>
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if ($_POST["action"] == "dinero") {
                        if (isset($_POST["U1"]) && isset($_POST["U2"])) {
                            $numero = (float)$_POST["numero"];
                            $U1 = $_POST["U1"];
                            $U2 = $_POST["U2"];
                            if (!empty($numero)) {
                                $U1 = $_POST["U1"];
                                $U2 = $_POST["U2"];
                                echo "<h4>" . cambiarDivisa($numero, $U1, $U2) . "</h4>";
                            } else {
                                echo "<h4>Introduzca el dinero</h4>";
                            }
                        }
                    } else {
                        echo "<h4>Introduzca una unidad</h4>";
                    }
                }
                ?>
            </div>
        </fieldset>
    </form>
    <br><br>
    <form action="" method="post">
        <fieldset>
            <legend>Ejercicio 2</legend>
            <label for="numero">Numero:</label>
            <input name="numero" type="number" step="1">
            <br><br>
            <label for="operacion">Tipo de Operación</label>
            <select name="operacion">
                <option value="sumatorio">Sumatorio</option>
                <option value="factioral">Factorial</option>
            </select>
            <input type="hidden" name="action" value="operaciones">
            <br><br>
            <input type="submit" value="Calcular">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if ($_POST["action"] == "operaciones") {
                    $numero = (int) $_POST["numero"];
                    $tipo_operacion = $_POST["operacion"];
                    if ($tipo_operacion == "sumatorio") {
                        $salida = sumatorio($numero);
                        if ($salida == -1) {
                            echo "Introduzca un numero positivo";
                        } else {
                            echo "<h4>El sumatorio de $numero es $salida</h4>";
                        }
                    } else {
                        $salida = factorial($numero);
                        if ($salida == -1) {
                            echo "Introduzca un numero positivo";
                        } else {
                            echo "<h4>El factorial de $numero es $salida</h4>";
                        }
                    }
                }
            }
            ?>
        </fieldset>
    </form>
    <br><br>
    <form action="" method="post">
        <fieldset>
            <?php
            $animales = [
                ["Lobo ibérico", "Mamífero", 2500],
                ["Lince ibérico", "Mamífero", 1668],
                ["Quebrantahuesos", "Ave", 2000],
                ["Oso pardo", "Mamífero", 500]
            ]
            ?>
            <table border="1">
                <thead>
                    <tr>
                        <th>Especie</th>
                        <th>Clase</th>
                        <th>Ejemplares</th>
                        <th>Estado</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($animales as $animal) {
                        list($nombre, $clase, $ejemplares) = $animal;
                        $estado = comprobarEstado($ejemplares);
                        echo "<tr><td>$nombre</td><td>$clase</td><td>$ejemplares</td><td>$estado</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </fieldset>
    </form>
</body>

</html>