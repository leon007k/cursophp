<?php

function connection($table, $user, $password){
  try{
    $connection = new PDO('mysql:host=localhost;dbname=' . $table, $user, $password);
    return $connection;
  }catch(PDOException $e){
    return false;
  }
}