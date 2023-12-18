<?php require 'database_conection.php' ?>

<?php
    if(!isset($_GET["titulo"])) header('location: index.php');

    if($_SERVER["REQUEST_METHOD"] == "GET"){
        $titulo = $_GET["titulo"];

        $sql = $conexion -> prepare("DELETE FROM videojuegos WHERE titulo = ?");
        $sql -> bind_param("s", $titulo);
        $sql -> execute();
        $sql -> close();
        header('location: index.php');
    }
?>
