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
    echo "<h2>EJERCICIO 1</h2>Crea un array que almacene nombres de productos y sus respectivos precios.Muestra en una tabla los productos con sus precios, ordenados alfabeticamente por el nombre del producto.Muestra tambien el precio total de los productos y cuantos productos hay en el array.<br><br>";
    ?>
    <table>
        <tr>
            <td>Productos</td>
            <td>Precios</td>
        </tr>
        <?php
        $almacen = [
            ["manzanas", 3],
            ["peras", 1],
            ["naranjas", 2],
            ["melocotones", 4],
        ];
        sort($almacen);
        foreach ($almacen as $prod) {
            list($producto, $precio) = $prod;
            echo "<tr>";
            echo "<td>$producto</td><td>$precio</td>";
            echo "</tr>";
        }
        $precioTotal = 0;
        foreach ($almacen as $prod) {
            list($producto, $precio) = $prod;
            $precioTotal += $precio;
        }
        ?>
    </table>
    <?php
    echo "<br>";
    echo "Hay " . count($almacen) . " productos totales";
    echo "<br>";
    echo "El precio total es: " . $precioTotal;
    ?>

    <?php
    echo "<h2>EJERCICIO 2</h2> Modifica el array anterior para que ademas de los productos y sus precios almacene la cantidad que se ha comprado de cada producto. Muestra en una columna adicional el precio total de cada producto (producto x cantidad) y al final de la tabla el precio total de todos los productos comprados y la cantidad de productos adquiridos. <br><br>";
    ?>
    <table>
        <tr>
            <td>Productos</td>
            <td>Precios</td>
        </tr>
        <?php
        $almacen = [
            ["manzanas", 3],
            ["peras", 1],
            ["naranjas", 2],
            ["melocotones", 4],
        ];
        sort($almacen);
        foreach ($almacen as $prod) {
            list($producto, $precio) = $prod;
            echo "<tr>";
            echo "<td>$producto</td><td>$precio</td>";
            echo "</tr>";
        }
        $precioTotal = 0;
        foreach ($almacen as $prod) {
            list($producto, $precio) = $prod;
            $precioTotal += $precio;
            list($producto, $precio) = $prod;
        }
        ?>
        <tr>
            <td>Productos totales</td>
            <td>Precio total</td>
        </tr>
        <tr>
        <?php
            echo "<td>" . count($almacen) . "</td>" . "<td>" . $precioTotal . "</td>";
        ?>
        </tr>
    </table>

    <?php
    echo "<h2>EJERCICIO 3</h2>Crea un array que contenga los números del 1 al 50. Elimina mediante un bucle y la
    función unset los números que sean divisibles entre 3. <br><br>";

    $array = array();
    for ($i = 1; $i <= 50; $i++) {
        $array[] = $i;
    }
    foreach ($array as $MiArray => $numero) {
        if ($numero % 3 == 0) {
            unset($array[$MiArray]);
        }
    }
    foreach ($array as  $numero) {
        echo $numero . "<br>";
    }
    ?>

    <?php
    echo "<h2>EJERCICIO 4</h2>Crea un array de dos dimensiones que contenga el nombre de cada persona, su
    apellido y su edad, que será un número aleatorio entre 0 y 100. Muestra los datos en
    una tabla que además contenga una columna que indique si la persona es menor de
    edad, mayor de edad, o está jubilada (+65 años). Utiliza la estructura match. <br><br>";
    $personas = array(
        array("Juan", "Perez", rand(0, 100)),
        array("Maria", "Gomez", rand(0, 100)),
        array("Carlos", "Lopez", rand(0, 100)),
    );
    ?>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Edad</th>
            <th>Tipo Persona</th>
        </tr>
        <?php
        foreach ($personas as $pers) {
            list($nombre, $apellido, $edad) = $pers;
            $tipoPersona = match (true) {
                $edad >= 0 && $edad <= 18 => "Menor de edad",
                $edad > 18 && $edad <= 64 => "Mayor de edad",
                default => "Jubilado",
            };
            echo "<tr>";
            echo "<td>$nombre</td><td>$apellido</td><td>$edad</td><td>$tipoPersona</td>";
            echo "</tr>";
        }
        ?>
    </table>

    <?php
    echo "<h2>EJERCICIO 5</h2>Crea un array que contenga el DNI y el nombre de cada persona. Muestra esa
    información en una tabla en la que además indiques si el DNI introducido es
    correcto. Un DNI será correcto cuando tenga exactamente 9 caracteres.<br><br>";
    $personas = array(
        array("45352649W","Migue"),
        array("84234234244P", "Paco"),
        array("218135494", "Fran"),
        array("588176747", "Fancis"),
    );
    ?>
    <table>
        <tr>
            <th>DNI</th>
            <th>Nombre</th>
            <th>DNI</th>
        </tr>
        <?php
        foreach ($personas as $pers) {
            list($DNI, $nombre) = $pers;
            $DNIcorrecto = match (true) {
                strlen($DNI) == 9 => "DNI correcto",
                strlen($DNI) != 9 => "DNI incorrecto",
                default  => $DNIcorrecto,
            };
            echo "<tr>";
            echo "<td>$DNI</td><td>$nombre</td><td>$DNIcorrecto</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>