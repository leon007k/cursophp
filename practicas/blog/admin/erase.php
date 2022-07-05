<?php

require 'config.php';
require '../functions.php';

existSession($_SESSION['admin']);

$conection = conection($bd_config);

if (!$conection){
  header('Location: ../error.php');
}

$id = idArticule($_GET['id']);

if(!$id){
  header('Location: ' . ROUTE . '/admin');
}

$statement = $conection->prepare('DELETE FROM articulos WHERE id = :id');

$stametent = $statement->execute(array('id' => $id));

header('Location: ' . ROUTE . '/admin');