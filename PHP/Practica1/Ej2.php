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
    $temperaturas = [
        ["Málaga", 20, 27],
        ["Sevilla", 17, 36],
        ["Cádiz", 19, 31],
        ["Jaén", 19, 33],
        ["Granada", 12, 35],
        ["Almería", 20, 27],
        ["Huelva", 16, 33]
    ];
    //Parte 1
    for ($i = 0; $i < count($temperaturas); $i++) {
        $temperaturas[$i][3] = ($temperaturas[$i][1] + $temperaturas[$i][2]) / 2;
    }
    //Parte 2
    $nombre = array_column($temperaturas, 0);
    $temp_min = array_column($temperaturas, 1);
    $temp_max = array_column($temperaturas, 2);
    $temp_media = array_column($temperaturas, 3);

    array_multisort($temp_min, SORT_ASC, $nombre, SORT_ASC, $temperaturas);
    ?>
    <!--Parte 3 -->
    <table>
        <tr>
            <th>Nombre</th>
            <th>Temp. min</th>
            <th>Temp. max</th>
            <th>Temp media</th>
        </tr>
        <?php
        foreach ($temperaturas as $temperatura) {
            list($nombre, $temp_min, $temp_max, $temp_media) = $temperatura;
            $temp_media = ($temp_max + $temp_min) / 2;
            echo "<tr>";
            echo "<td>$nombre</td><td>$temp_min</td><td>$temp_max</td><td>$temp_media</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>