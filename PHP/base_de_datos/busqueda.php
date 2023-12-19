<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busqueda de videojugos</title>
    <?php require 'database_conection.php' ?>
  
</head>
<body>
    <?php 
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        //PARA BUSCAR CON LAS LETRAS EXACTAS
        /*
        $titulo = $_POST["titulo"];

        $sql = "SELECT * FROM videojuegos WHERE titulo = ?";
        $stmt = $conexion -> prepare($sql);
        $stmt -> bind_param("s", $titulo);
        $stmt -> execute();
        $resultado = $stmt -> get_result();
        $conexion -> close();
        */

        //PARA BUSCAR POR TITULO
        /*
        $titulo = $_POST["titulo"] . '%' ;

        $sql = ("SELECT * FROM videojuegos WHERE titulo LIKE CONCAT('%',?,'%')");
        $stmt = $conexion -> prepare($sql);
        $stmt -> bind_param("s", $titulo);
        $stmt -> execute();
        $resultado = $stmt -> get_result();
        $conexion -> close();
        */

        //PARA BUSCAR POR FILTROS
        $titulo = '%' . $_POST["titulo"] . '%';
        $columna = $_POST["columna"];
        $orden = $_POST["orden"];

        $sql = ("SELECT * FROM videojuegos WHERE titulo LIKE CONCAT('%',?,'%') ORDER BY $columna $orden");
        $stmt = $conexion -> prepare($sql);
        $stmt -> bind_param("s", $titulo);
        $stmt -> execute();
        $resultado = $stmt -> get_result();
        $conexion -> close();

        if ($resultado -> num_rows === 0) {
            echo "El videojuego no esta en la lista o esta mal escrito";
        } else {
            while($fila = $resultado -> fetch_assoc()){
                echo "Titulo: ". $fila["titulo"] ."<br>";
                echo "Distribuidora: ". $fila["distribuidora"] ."<br>";
                echo "Precio: ". $fila["precio"] ."€" . "<br><br>" ;
            }
        } 
    }
    ?>
</body>
</html>