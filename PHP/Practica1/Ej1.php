<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>

    <?php
    for($n1 = 1; $n1 <= 10; $n1++){
        $multi = 0;
        echo "<table>";
        echo "<tr>";
        echo "<th>Tabla del $n1 </th>";
        for($n2 = 1; $n2 <= 10; $n2++){
            $multi = $n1 * $n2;
        echo "<tr>";
        echo "<td>$n1 " . " x " . "$n2" . " = " . "$multi</td>";
        echo "</tr>";
        }
        echo "</tr>";
        echo "</table>";
        echo "<br>";
    }
    ?>
</body>

</html>