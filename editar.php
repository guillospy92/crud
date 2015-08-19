<?php

include ("motor.php");
$est = new usuario();
$est->actualizar($_POST['nombre'],$_POST['apellido'],$_POST['telefono'],$_POST['id']);
header('location:index.php')




?>