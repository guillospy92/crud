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
      <?php

        include ('motor.php');
        $est = new usuario();
        $reg=$est->mostrar_editar($_GET['id']);




        ?>
      <form action="editar.php" method="POST">
  <div class="form-group"  >
    <label for="exampleInputEmail1">Nombre</label>
    <input type="text" class="form-control" name="nombre" value="<?php echo $reg[0]["nombre"]; ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Apellido</label>
    <input type="text" class="form-control" name="apellido"value="<?php echo $reg[0]["apellido"]; ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Telefono</label>
    <input type="text" class="form-control" name="telefono" value="<?php echo $reg[0]["telefono"]; ?>"">
     <input type="hidden" class="form-control" name="id" value="<?php echo $reg[0]["id"]; ?>"">
  </div>
  
 
  
  
  <button type="submit" class="btn btn-default">Submit</button>
</form>

<hr>
<hr>



         
      </div>
       <div class="col-md-2"></div>

    </div>

   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
   
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>