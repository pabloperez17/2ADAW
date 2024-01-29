<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search perro</title>
</head>
<body>
    <form action="" method="post">
        Nombre:
        <select name="nombre">
            <?php
                for($i = 0; $i < 98 ;$i++){ ?>
                    <option value ="<?php echo $i ?>"><?php echo $i ?>
                    </option>
                <?php } ?>
            ?>
        </select><br><br>
        <input type="submit" value="Buscar">
    </form>

    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $nombre = $_POST["nombre"];

    }
    ?>
</body>
</html>