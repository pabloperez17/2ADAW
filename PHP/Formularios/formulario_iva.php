<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <label>Precio</label>
        <br>
        <input type="text" name="precio">
        <br><br>
        <label>Tipo de iva</label>
        <br>
        <input type="text" name="tipo_iva">
        <br><br>
        <input type="submit" value="Enviar">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $precio = $_POST["precio"];
        $tipo_iva = $_POST["tipo_iva"];
        function precioConIva(float $precio, string $tipo_iva)
        {
            $precio = match (true) {
                $tipo_iva == "GENERAL" => $precio * 1.21,
                $tipo_iva == "REDUCIDO" => $precio * 1.1,
                $tipo_iva == "SUPERREDUCIDO" => $precio * 1.04,
                $tipo_iva == "SIN IVA" => $precio,
                default => "Error"
            };
            return $precio;
        }
        echo "<h4>" . PrecioConIva($precio, $tipo_iva) . "</h4>";
    }
    ?>
</body>

</html>