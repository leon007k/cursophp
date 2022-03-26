<?php

require 'admin/config.php';
require 'functions.php';

$conection = conection($bd_config);
if(!$conection){
  header('Location: error.php');
}

// * validamos que se haya echo la peticion de busqueda y no venga vacio el dato a buscar
if($_SERVER['REQUEST_METHOD'] == 'GET' && !empty($_GET['search'])){
  $search = sanitize($_GET['search']);
  $statement = $conection->prepare("SELECT * FROM articulos WHERE titulo LIKE :search OR texto LIKE :search");
  $statement->execute(array(':search' => "%$search%"));
  $result = $statement->fetchAll();
  
  if(empty($result)){
    $answer = "No se encontraron articulos con el titulo: " . $search;
  }else{
    $answer = "Resultado de la busqueda: " . $search;
  }
}else{
  header("Location:" . ROUTE . "/index.php");
}

require 'views/search_view.php';