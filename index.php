
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>probando</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

   
  </head>
  <body>
  <br>
  <br>
  <br>
  <br>


    <div class="container">
      
     <div class="col-md-2"></div>
      <div class="col-md-8">
      <form action="registrando.php" method="POST">
  <div class="form-group"  >
    <label for="exampleInputEmail1">Nombre</label>
    <input type="text" class="form-control" name="nombre" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Apellido</label>
    <input type="text" class="form-control" name="apellido" placeholder="apellido">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Telefono</label>
    <input type="text" class="form-control" name="telefono" placeholder="telefono">
  </div>
  
 
  
  
  <button type="submit" class="btn btn-default">Submit</button>
</form>

<hr>
<hr>

<form  action="buscar.php">
<input type=text class="form-control " style="width:30%;" placeholder="buscar un usuario">
<br>
<input type="submit" class="btn btn-primary btn-sm ">
<br>
<br>
<br>
</form>


<table class="table table-striped">

<thead>
  <tr>
    <th>ID</th>
    <th>NOMBRE</th>
    <th>APELLIDO</th>
    <th>TELEFONO</th>


  </tr>
</thead>

<tbody>

<?php
include ("motor.php");
$est = new usuario();

$usuario=$est->mostrar();

foreach ($usuario as $usu ) {
  
  echo "

  <tr>

<td>{$usu['id']}</td>
<td>{$usu['nombre']}</td>
<td>{$usu['apellido']}</td>
<td>{$usu['telefono']}</td>

<td><a href='eliminar.php?id={$usu['id']}'>Eliminar</a></td>
<td><a href='editando.php?id={$usu['id']}'>Actualizar</a></td>

  </tr>


  ";

}


?>


</tbody>

</table>
         
      </div>
       <div class="col-md-2"></div>

    </div>

   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
   
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>