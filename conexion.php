<?php
$mysqli = new mysqli('localhost', 'root', '', 'banco');


if (mysqli_connect_error()) {
    die('Error de Conexión (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
}

echo 'conexion exitosa ';

$mysqli->close();
?>



