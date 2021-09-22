<?php
$usuario="root";
$password="";
$servidor="localhost";
$db="j";

$conexion=mysqli_connect($servidor,$usuario,$password,$db) or die ("Error con el servidor de la base de datos");
$db=mysqli_select_db($conexion,$db) or die ("Error conexion con la base de datos");

$nombre=$_POST['nombre'];
  $email=$_POST['email'];
  $mensaje=$_POST['mensaje'];

  //hacemos la sentencia de sql
  $sql="INSERT INTO personas VALUES('$nombre',
                                 '$email',
                                 '$mensaje')";

  //ejecutamos la sentencia de sql
  $ejecutar=mysqli_query($conexion,$sql);
  //verificamos la ejecucion
  if(!$ejecutar)
  {
    echo"Hubo Algun Error";
  }
  else
  {
    echo"Datos Guardados Correctamente <br> <a href='index.html'>volver</a>";
  }
?>