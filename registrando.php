<?php

include ("motor.php");
$est = new usuario();


$est->nombre =$_POST['nombre'];
$est->apellido =$_POST['apellido'];
$est->telefono =$_POST['telefono'];
$est->agregar();
header('location:index.php');




?>