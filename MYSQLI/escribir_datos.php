<?php

$conection = new mysqli('localhost','root','','prueba_consola');

if ($conection-> connect_errno) {
  die('Lo siento hubo un problema con el servidor');
}else{
  $id = isset($_GET['id']) ? $_GET['id'] : 1;

  $sql = "INSERT INTO prueba_consola.users(ID,Name,Email) VALUES(null, 'Daniel', 50)";
  $conection->query($sql);
  if($conection->affected_rows >= 1){
    echo 'Filas agregadas: ' . $conection->affected_rows;
  }
}