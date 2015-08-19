<?php


class usuario {


public $id;
public $nombre;
public $apellido;
public $telefono;


public function agregar(){

 $query="INSERT INTO usuarios VALUES(null,'{$this->nombre}','{$this->apellido}','{$this->telefono}')";
 mysql_query($query);

 //echo $query;
 //echo mysql_error();
 //exit();


}


public function mostrar(){

	$query = "SELECT * FROM usuarios";

	$rs=mysql_query($query);

	$array =array();
	while($fila=mysql_fetch_assoc($rs)){
      
      $array[]=$fila;

	}

	return $array;

}


public function mostrar_editar($id){

	$query = "SELECT * FROM usuarios WHERE id=$id";

	$rs=mysql_query($query);

	$array =array();
	while($fila=mysql_fetch_assoc($rs)){
      
      $array[]=$fila;

	}

	return $array;

}

public function eliminar ($id){

 

  $query="DELETE FROM usuarios WHERE id=$id";
  mysql_query($query);

 }

 public function actualizar ($nombre,$apellido,$telefono,$id){

 

  $query="UPDATE usuarios SET nombre='$nombre',apellido='$apellido',telefono='$telefono' WHERE id=$id";
  mysql_query($query);

  //echo $query;
 //echo mysql_error();
 //exit();

 




}



}




?>