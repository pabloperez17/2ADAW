<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="estilosheet" href="estilo.css">
</head>

<body>
    <?php
    echo "<h1>Hola mundo</h1>";
    $n1 = 1; #int
    $decimal = 1.5; #float
    $exponente = 3e5; #float
    //echo $exponente;

    var_dump($exponente);
    echo "<br><br>";

    /*$string1 = "Hola";
    $string2 = 'Hola';
    echo "Texto: $string1";
    echo "<br>";
    echo 'Texto: $string1'; //da fallo, solo sirve con comillas dobles
    echo "<br>";
    echo $string1 . " " . $string2;
    echo "<br>";

    echo "<h1>$string1</h1>";
    echo "<h1>" . $string1 . "</h1>";*/

    /*$array1 = [1,2,3];
    $array2 = ["a","b","c"];

    var_dump($array1);
    echo "<br><br>";
    var_dump($array2);*/

    /*$b = true;
    $c = false;

    var_dump($b);*/

    /*define("EDAD", 25);
    ?>

    <?php
    echo EDAD;*/
    ?>

    <?php
    $dia = date("d");
    $hora = date("h");
    $minutos = date("m");
    if ($dia <= 15) {
        echo "Estamos a principios de mes";
    } else {
        echo "Estamos a finales de mes, dia" . " " . $dia;
    }
    if ($hora < "12") {
        echo "<br>Buenos dias";
    } elseif ($hora < 20) {
        echo "<br>Buenas tardes";
    } else {
        echo "<br>Buenas noches";
    }
    echo "<br><br>"
    ?>

    <?php
    $x = rand(1, 150);
    if ($x < 10) {
        echo "El número es de 1 dígito. El número es " . $x;
    } elseif ($x < 100) {
        echo "El número es de 2 dígitos. El número es " . $x;
    } else {
        echo "El número es de 3 dígitos. El número es " . $x;
    }
    echo "<br><br>"
    ?>

    <?php
    $n = rand(1, 3);
    switch ($n) {
        case 1:
            echo "$n es igual a 1";
            break;
        case 2:
            echo "$n es igual a 2";
            break;
        default:
            echo "$n es igual a 3";
            break;
    }
    echo "<br><br>"
    ?>
    <?php
    $dia = date("l");
    if ($dia == "Monday") : $diaesp = "Lunes";
    endif;
    if ($dia == "Wednesday") : $diaesp = "Miércoles";
    endif;
    if ($dia == "Friday") : $diaesp = "Viernes";
    endif;
    if ($dia == "Tuesday") : $diaesp = "Martes";
    endif;
    if ($dia == "Thuersday") : $diaesp = "Jueves";
    endif;
    if ($dia == "Saturday") : $diaesp = "Sábado";
    endif;
    if ($dia == "Sunday") : $diaesp = "Domingo";
    endif;
    switch ($dia) {
        case "Monday":
        case "Wednesday":
        case "Friday":
            echo "Hoy $diaesp hay clase de Desarrollo Web Servidor";
            break;
        default:
            echo "Hoy $diaesp no hay clase de Desarrollo Web Servidor";
            break;
    }
    echo "<br><br>"
    ?>

    <?php
    /*EJERCICO 1*/
    $x = rand(1, 10);
    if ($x % 2 == 0) {
        echo "El número es par. El número es " . $x;
    } else {
        echo "El número es impar. El número es " . $x;
    }
    echo "<br><br>"
    ?>

    <?php
    /*EJERCICIO 2*/
    $x = rand(-10, 10);
    if ($x < 0) {
        echo "El número es menor que 0. El número es " . $x;
    } elseif ($x == 0) {
        echo "El número es " . $x;
    } else {
        echo "El número es mayor que 0. El número es " . $x;
    }
    echo "<br><br>"
    ?>

    <?php
    /*ejercicio 4*/
    $dia = date("d");
    $mes = date("F");
    if ($mes == "January") : $mes_esp = "Enero";
    endif;
    if ($mes == "February") : $mes_esp = "Febrero";
    endif;
    if ($mes == "March") : $mes_esp = "Marzo";
    endif;
    if ($mes == "April") : $mes_esp = "Abril";
    endif;
    if ($mes == "May") : $mes_esp = "Mayo";
    endif;
    if ($mes == "June") : $mes_esp = "Junio";
    endif;
    if ($mes == "July") : $mes_esp = "Julio";
    endif;
    if ($mes == "August") : $mes_esp = "Agosto";
    endif;
    if ($mes == "September") : $mes_esp = "Septiembre";
    endif;
    if ($mes == "October") : $mes_esp = "Octubre";
    endif;
    if ($mes == "November") : $mes_esp = "Noviembre";
    endif;
    if ($mes == "December") : $mes_esp = "Diciembre";
    endif;
    switch ($mes) {
        case "January":
            echo "$dia de $mes_esp";
            break;
        case "February":
            echo "$dia de $mes_esp";
            break;
        case "March":
            echo "$dia de $mes_esp";
            break;
        case "April":
            echo "$dia de $mes_esp";
            break;
        case "May":
            echo "$dia de $mes_esp";
            break;
        case "June":
            echo "$dia de $mes_esp";
            break;
        case "July":
            echo "$dia de $mes_esp";
            break;
        case "August":
            echo "$dia de $mes_esp";
            break;
        case "Semptember":
            echo "$dia de $mes_esp";
            break;
        case "October":
            echo "$dia de $mes_esp";
            break;
        case "November":
            echo "$dia de $mes_esp";
            break;
        default:
            echo "$dia de $mes_esp";
            break;
    }
    echo "<br><br>"
    ?>

    <?php
    /*EJERCICIO 5*/
    $zonah = date("e");
    echo "La zona horaria de España es $zonah";
    echo "<br><br>"
    ?>

    <?php
    $i = 1;
    while ($i <= 10) {
        echo $i;
        $i++;
    }
    echo "<br><br>"
    ?>

    <?php
    $i = 1;
    do {
        echo $i . "<br>";
        $i++;
    } while ($i <= 10);
    echo "<br><br>"
    ?>

    <?php
    for ($i = 1; $i <= 10; $i++) {
        echo $i;
    }
    echo "<br><br>"
    ?>

    <?php
    for ($i = 1;; $i++) {
        if ($i > 10) {
            break;
        }
        echo $i;
    }
    echo "<br><br>"
    ?>

    <?php
    for ($i = 1; $i <= 50; $i++) {
        if ($i % 3 == 0 || $i % 2 == 0) {
            if ($i % 6 != 0) echo $i . "<br>";
        }
    }
    echo "<br><br>"
    ?>

    <?php
    echo "<ul>";
    for ($x = 1; $x <= 20; $x++) {
        if ($x % 2 != 0) echo "<li>" . $x . "<br>";
    }
    echo "</ul>";
    echo "<br><br>"
    ?>

    <ul>
        <?php
        for ($x = 1; $x <= 20; $x++) {
            if ($x % 2 != 0) echo "<li>" . $x . "</li>";
        }
        echo "<br><br>"
        ?>
    </ul>

    <?php
    $suma = 0;
    for ($x = 1; $x <= 20; $x++) {
        if ($x % 2 == 0) {
            $suma += $x;
        }
    }
    echo $suma;
    echo "<br><br>"
    ?>

    <?php
    for ($x = 2; $x <= 50; $x++) {
        $primo = true;
        for ($y = 2; $y <= $x - 1 && $primo; $y++) {
            if ($x % $y == 0) {
                $primo = false;
                break;
            }
        }
        if ($primo) echo "$x <br>";
    }
    echo "<br><br>"
    ?>

    <?php
    $cont = 0;
    for ($x = 2; $cont <= 50; $x++) {
        $primo = true;
        for ($y = 2; $y <= $x - 1 && $primo; $y++) {
            if ($x % $y == 0) {
                $primo = false;
                break;
            }
        }
        if ($primo) {
            echo "$x <br>";
            $cont++;
        }
    }
    echo "<br><br>"
    ?>


    <?php
    $personas = array(
        '78654429D' => 'Pedro',
        '98534280T' => 'Juan',
        '12987354C' => 'Lucas',
        '86734293K' => 'Jesus',
    );
    $array2 = array('value1', 'value2', 'value3');

    print_r($array1);

    print("<br><br>");

    print_r($array2);

    print("<br><br>");
    ?>

    <?php
    foreach ($personas as $persona) {
        echo "<li>$persona</li>" . "<br>";
    }

    print("<br><br>");

    foreach ($personas as $dni => $persona) {
        echo "<li>DNI: $dni, Nombre: $persona</li>" . "<br>";
    }
    echo "<br><br>"
    ?>
    <h1>Tabla con PHP y HTML</h1>
    <table border=1>
        <tr>
            <th>Nombre</th>
            <th>DNI</th>
        </tr>
        <?php
        foreach ($personas as $dni => $persona) {
            echo "<tr>";
            echo "<td>$persona</td><td>$dni</td>";
            echo "</tr>";
        }
        ?>
    </table>

    <h1>Tabla con sort</h1>
    <table border=1>
        <tr>
            <th>Nombre</th>
            <th>DNI</th>
        </tr>
        <?php
        $arraytemp1 = $personas;
        sort($arraytemp1);
        foreach ($arraytemp1 as $dni => $persona) {
            echo "<tr>";
            echo "<td>$persona</td><td>$dni</td>";
            echo "</tr>";
        }
        ?>
    </table>

    <h1>Tabla con rsort</h1>
    <table border=1>
        <tr>
            <th>Nombre</th>
            <th>DNI</th>
        </tr>
        <?php
        $arraytemp2 = $personas;
        rsort($arraytemp2);
        foreach ($arraytemp2 as $dni => $persona) {
            echo "<tr>";
            echo "<td>$persona</td><td>$dni</td>";
            echo "</tr>";
        }
        ?>
    </table>

    <h1>Tabla con asort</h1>
    <table border=1>
        <tr>
            <th>Nombre</th>
            <th>DNI</th>
        </tr>
        <?php
        asort($personas);
        foreach ($personas as $dni => $persona) {
            echo "<tr>";
            echo "<td>$persona</td><td>$dni</td>";
            echo "</tr>";
        }
        ?>
    </table>

    <h1>Tabla con arsort</h1>
    <table border=1>
        <tr>
            <th>Nombre</th>
            <th>DNI</th>
        </tr>
        <?php
        arsort($personas);
        foreach ($personas as $dni => $persona) {
            echo "<tr>";
            echo "<td>$persona</td><td>$dni</td>";
            echo "</tr>";
        }
        ?>
    </table>

    <h1>Tabla con ksort</h1>
    <table border=1>
        <tr>
            <th>Nombre</th>
            <th>DNI</th>
        </tr>
        <?php
        ksort($personas);
        foreach ($personas as $dni => $persona) {
            echo "<tr>";
            echo "<td>$persona</td><td>$dni</td>";
            echo "</tr>";
        }
        ?>
    </table>

    <h1>Tabla con krsort</h1>
    <table border=1>
        <tr>
            <th>Nombre</th>
            <th>DNI</th>
        </tr>
        <?php
        krsort($personas);
        foreach ($personas as $dni => $persona) {
            echo "<tr>";
            echo "<td>$persona</td><td>$dni</td>";
            echo "</tr>";
        }
        ?>
    </table>

    <?php
    $juegos = [
        ["Pacman", "Atari", 60],
        ["Fortnite", "PS4", 0],
        ["Mario Kart", "Super Nintendo", 70],
        ["Street Fighter", "PS4", 50],
        ["Legend of Zelda", "Nintendo 64", 40],
        ["Castelvania", "Nintendo 64", 55],
    ];
    foreach ($juegos as $juego) {
        list($nombre, $consola, $precio) = $juego;
        echo "<li>$nombre, $consola, $precio</li>";
    }
    echo "<br><br>"
    ?>

    <table>
        <tr>
            <th>Nombre</th>
            <th>Consola</th>
            <th>Precio</th>
        </tr>
        <?php
        foreach ($juegos as $juego) {
            list($nombre, $consola, $precio) = $juego;
            echo "<tr>";
            echo "<td>$nombre</td><td>$consola</td><td>$precio</td>";
            echo "</tr>";
        }
        ?>
    </table>

    <table>
        <tr>
            <th>Nombre</th>
            <th>Consola</th>
            <th>Precio</th>
        </tr>
        <?php
        $nombre = array_column($juegos, 0);
        $consola = array_column($juegos, 1);
        $precio = array_column($juegos, 2);
        array_multisort($consola, SORT_ASC, $nombre, SORT_ASC, $juegos);
        foreach ($juegos as $juego) {
            list($nombre, $consola, $precio) = $juego;
            echo "<tr>";
            echo "<td>$nombre</td><td>$consola</td><td>$precio</td>";
            echo "</tr>";
        }
        echo "<br><br>"
        ?>
    </table>

    <table>
        <tr>
            <th>Nombre</th>
            <th>Consola</th>
            <th>Precio</th>
        </tr>
        <?php
        foreach ($juegos as $juego) {
            list($nombre, $consola, $precio) = $juego;
            echo "<tr>";
            echo "<td>$nombre</td><td>$consola</td><td>$precio</td>";
            echo "</tr>";
        }
        for ($i = 0; $i < count($juegos); $i++) {
            $juegos[$i][2] = rand(1, 10);
        }
        echo "<br><br>"
        ?>
    </table>

    <?php
    echo "<br><br>";
    $numeros = array();
    for ($i = 1; $i <= 50; $i++) {
        if ($i % 2 == 0) {
            array_push($numeros, $i);
        }
    }
    shuffle($numeros);
    arsort($numeros);
    print_r($numeros);
    echo "<br><br>";
    ?>

    <table>
        <?php
        $numerosale;
        $array1 = array();
        for ($i = 0; $i <= 9; $i++) {
            $numerosale = rand(0, 100);
            array_push($array1, $numerosale);
        }
        print_r($array1);
        ?>
    </table>

    <table>
        <tr>
            <th>Países</th>
            <th>Capitales</th>
        </tr>
        <?php
        $paises = array(
            "Italy" => "Rome", "Luxembourg" => "Luxembourg", "Belgium" =>
            "Brussels", "Denmark" => "Copenhagen", "Finland" => "Helsinki", "France" => "Paris", "Slovakia" => "Bratislava", "Slovenia" => "Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland" => "Dublin", "Netherlands" => "Amsterdam", "Portugal" => "Lisbon", "Spain" => "Madrid", "Sweden" => "Stockholm", "United Kingdom" => "London", "Cyprus" => "Nicosia", "Lithuania" => "Vilnius", "Czech Republic" => "Prague", "Estonia" => "Tallin", "Hungary" => "Budapest", "Latvia" => "Riga", "Malta" => "Valetta", "Austria" => "Vienna", "Poland" => "Warsaw"
        );
        foreach ($paises as $capital => $paises) {
            echo "<tr>";
            echo "<td> $paises </td> <td>$capital</td>" . "<br>";
            echo "</tr>";
        }
        echo "<br><br>";
        ?>
    </table>

    <table>
        <tr>
            <td>Titulo</td>
            <td>Plataforma</td>
            <td>Temporadas</td>
        </tr>
        <?php
        $series = [
            ["Prison Break", "Disney", 5],
            ["Peaky Blinders", "Netflix", 7],
            ["La casa de papel", "Netflix", 5],
            ["Breaking bad", "Netflix", 8],
            ["El barco", "HBO", 3],
            ["Juego de tronos", "Disney", 12],
        ];
        foreach ($series as $serie) {
            list($titulo, $plataforma, $temporadas) = $serie;
            echo "<tr>";
            echo "<td>" . $titulo . "</td>" .  "<td>" . $plataforma . "</td>" . "<td>" . $temporadas . "</td>" . "<br>";
            echo "</tr>";
        }
        echo "<br><br>";
        ?>
    </table>

    <table>
        <tr>
            <td>Titulo</td>
            <td>Plataforma</td>
            <td>Temporadas</td>
        </tr>
        <?php
        $series = [
            ["Prison Break", "Disney", 5],
            ["Peaky Blinders", "Netflix", 7],
            ["La casa de papel", "Netflix", 5],
            ["Breaking bad", "Netflix", 8],
            ["El barco", "HBO", 3],
            ["Juego de tronos", "Disney", 12],
        ];
        $titulo = array_column($series, 0);
        $plataforma = array_column($series, 1);
        $temporadas = array_column($series, 2);
        array_multisort($temporadas, SORT_ASC, $series);
        foreach ($series as $serie) {
            list($titulo, $plataforma, $temporadas) = $serie;
            echo "<tr>";
            echo "<td>" . $titulo . "</td>" .  "<td>" . $plataforma . "</td>" . "<td>" . $temporadas . "</td>" . "<br>";
            echo "</tr>";
        }
        echo "<br><br>";
        ?>
    </table>

    <table>
        <tr>
            <td>Titulo</td>
            <td>Plataforma</td>
            <td>Temporadas</td>
        </tr>
        <?php
        $series = [
            ["Prison Break", "Disney", 5],
            ["Peaky Blinders", "Netflix", 7],
            ["La casa de papel", "Netflix", 5],
            ["Breaking bad", "Netflix", 8],
            ["El barco", "HBO", 3],
            ["Juego de tronos", "Disney", 12],
        ];
        $titulo = array_column($series, 0);
        $plataforma = array_column($series, 1);
        $temporadas = array_column($series, 2);
        array_multisort($plataforma, SORT_ASC, $titulo, SORT_ASC, $series);
        foreach ($series as $serie) {
            list($titulo, $plataforma, $temporadas) = $serie;
            echo "<tr>";
            echo "<td>" . $titulo . "</td>" .  "<td>" . $plataforma . "</td>" . "<td>" . $temporadas . "</td>" . "<br>";
            echo "</tr>";
        }
        echo "<br><br>";
        ?>
    </table>

    <?php
    $FondoSur = [
        ["Jaime", rand(0, 10)],
        ["Victor", rand(0, 10)],
        ["Ayyoub", rand(0, 10)],
        ["Fernando", rand(0, 10)],
        ["Elliot", rand(0, 10)],
    ];
    sort($FondoSur);
    ?>
    <table>
        <tr>
            <td>Nombre</td>
            <td>Nota</td>
            <td>Calificación</td>
        </tr>
        <?php
        foreach ($FondoSur as $estudiantes) {
            list($nombre, $notas) = $estudiantes;
            switch ($notas) {
                case 1:
                case 2:
                case 3:
                case 4:
                    $calificacion = "Suspenso";
                    break;
                case 5:
                    $calificacion = "Suficiente";
                    break;
                case 6:
                    $calificacion = "Bien";
                    break;
                case 7:
                case 8:
                    $calificacion = "Notable";
                    break;
                case 9:
                case 10:
                    $calificacion = "Sobresaliente";
                    break;
            }
            echo "<tr>";
            echo "<td>" . $nombre . "</td>" .  "<td>" . $notas . "</td>" . "<td>" . $calificacion . "</td>" . "<br>";
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>