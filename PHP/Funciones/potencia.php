<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Potencia</title>
</head>
<body>
    <?php
    function calcularPotencia(int $base, int $exponente) : int {
        $resultado = 1;
        if ($exponente >= 0) {
            for($i = 1; $i < $exponente; $i++) {
                $resultado = $resultado * $base;
            }
            return $resultado;
        }
    }
    echo "<h3>" . calcularPotencia(2,1) . "</h3>";
    echo "<h3>" . calcularPotencia(3,2) . "</h3>";
    echo "<h3>" . calcularPotencia(3,3) . "</h3>";
    ?>
</body>
</html>