<?php

$conection = new mysqli('localhost','root','','prueba_consola');

if ($conection-> connect_errno) {
  die('Lo siento hubo un problema con el servidor');
}else{
  //! Se hace de esta forma para evitar que nos inyecten codigo malisioso a la bd

  //# Preparamos la bd para que reciba los datos
  $statement = $conection->prepare("INSERT INTO prueba_consola.users(ID,Name,Email) VALUES(?, ?, ?)");
  //# Reemplazamos los placeholder ? con los valores que queremos usar.
    // una S por placeholder que tengamos
    // s = string
    // i = integer
    // d = double
  $statement->bind_param('sss',$id,$name,$email);
  $id = NULL;
  if(isset($_GET['nombre']) && isset($_GET['email'])){
    $name = $_GET['nombre'];
    $email = $_GET['email'];
  }
  //# ejecutamos la sentencia para la base de datos
  $statement->execute();


}