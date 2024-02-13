<?php

$HOST="localhost";
$USER="root";
$PASS="";
$DB="academia";

$conexion = new mysqli($HOST,$USER,$PASS,$DB);

if($conexion->connect_errno){
    echo "Fallo: ".$conexion->connect_error;
    exit();
}

$consulta = "SELECT dni,nombre,apellidos,edad,exp_curso FROM alumnos";
$resultado=$conexion->query($consulta);
$res = $resultado->fetch_all(MYSQLI_ASSOC);

mysqli_close($conexion);

if($resultado){
    echo json_encode($res);
}
else{
    echo "ERROR consulta";
}

?>