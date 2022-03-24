<?php

$conection = new mysqli('localhost','root','','prueba_consola');

if ($conection-> connect_errno) {
  die('Lo siento hubo un problema con el servidor');
}else{
  $id = isset($_GET['id']) ? $_GET['id'] : 1;

  $sql = "SELECT * FROM users WHERE ID = $id";
  $result = $conection->query($sql);

  if($result->num_rows){
    /**
     * ! Esto no es valido porque solo me devolvera un valor
     *  echo '<pre>' . 
     * var_dump($result->fetch_assoc()) .
     * '<br>' . $result->fetch_assoc()['Name'] . '</pre>'; */

    while($row = $result->fetch_assoc()){
      echo $row['ID'] . ' - ' . $row['Name'] . '<br>';
    }

  }else {
    echo 'No hay datos'; 
  }

}