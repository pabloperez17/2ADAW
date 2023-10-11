<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label>Número 1</label>
        <br>
        <input type="text" name ="num1">
        <br><br>
        <label>Número 2</label>
        <br>
        <input type="text" name ="num2">
        <br><br>
        <label>Número 3</label>
        <br>
        <input type="text" name ="num3">
        <br><br>
        <input type="submit" value="Enviar">
    </form>
    <?php
        if ($_SERVER ["REQUEST_METHOD"] == "POST") {
            $num1 = $_POST ["num1"];
            $num2 = $_POST["num2"];
            $num3 = $_POST["num3"];
            if (($num1 > $num2) && ($num1 > $num3)){
                echo "<h4>El número más grande es: $num1</h4>";
            }
            else if (($num2 > $num1) && ($num2 > $num3)){
                echo "<h4>El número más grande es: $num2</h4>";
            }
            else if (($num3 > $num1) && ($num3 > $num2)){
                echo "<h4>El número más grande es: $num3</h4>";
            } else {
                echo "<h4>Los tres números son iguales $num3</h4>";
            }
        }
    ?>
</body>
</html>