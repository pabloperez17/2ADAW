<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
        <label>Base</label>
        <br>
        <input type="text" name ="base">
        <br><br>
        <label>Exponente</label>
        <br>
        <input type="text" name ="exponente">
        <br><br>
        <input type="submit" value="Calcular">
    </form>
    <?php
    if ($_SERVER ["REQUEST_METHOD"] == "POST") {
        $base = (int) $_POST ["base"];
        $exponente = (int) $_POST["exponente"];
        echo "<h4>" . ($base**$exponente) . "</h4>";
    }
    ?>
</body>
</html>