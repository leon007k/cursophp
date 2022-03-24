<?php

/**
 * important Este es un nuevo metodo para realizar la conexion a la base de datos
 */
  $id =$_GET['id'];

  try {
    $conection = new PDO('mysql:host=localhost;dbname=prueba_consola','root','');
    echo 'Conexion realizada con exito <br>';

    //! Metodo Query, no es viable si requerimos que el usario nos de un dato mediante el $_GET
    /*$result = $conection->query('SELECT * FROM users');
    foreach($result as $res){
      echo  $res['ID'] .' - ' . $res['Name'] . '<br>'; 
    } */

    //Prepared Statements 
    $statement = $conection->prepare('SELECT * FROM users where ID = :id');
    $statement->execute(array(':id' => $id));

    
    /*$result = $statement->fetch();
     echo '<pre>' . print_r($result) . '</pre>'; */
     $result = $statement->fetchAll();
    foreach($result as $res){
      print_r($res['ID']);
    }
    

  }catch(PDOException $e){
    echo "Error: " . $e->getMessage();
  }
