<?php

include ("motor.php");
$est = new usuario();

$est->eliminar($_GET['id']);
header('location:index.php');







?>