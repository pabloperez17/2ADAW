<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label>Numero 1:</label>
        <input type="number" name="num1">
        <label>Numero 2:</label>
        <input type="number" name="num2">
        <input type="submit" value="calcular">
        <?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $numero1 = (int) $_POST["num1"];
            $numero2 = (int) $_POST["num2"];
            $solucion = $numero1 *$numero2;
            echo ($solucion);
        }
        ?>
    </form>
</body>
</html>