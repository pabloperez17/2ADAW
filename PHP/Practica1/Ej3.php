<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <table>
        <tr>
            <th>Cuadrado perfecto</th>
            <th>Raíz cuadrada</th>
        </tr>
        <?php
        for ($x = 1; $x <= 50; $x++) {
            $cuadrado = true;
            for ($y = 2; $y <= $x - 1 && $cuadrado; $y++) {
                if ($x % $y == 0) {
                    $cuadrado = false;
                    break;
                }
            }
            if ($cuadrado) echo "$x <br>";
        }
        ?>
    </table>
</body>
</html>