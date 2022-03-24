<?php

require 'admin/config.php';
require 'functions.php';

$conection = conection($bd_config);

if(!$conection){
  header('Location: error.php');
}

// #obtenemos el id del articulo
$id_articule = idArticule($_GET['id']);

if(empty($id_articule)){
  header('Location: index.php');
}

// #obtenemos el contenido del articulo
$posts = get_post_to_id($conection, $id_articule);

if(!$posts){
  header('Location: index.php');
}

// # Accedemos al arrelgo para extraer el contenido  
$posts = $posts[0];

require 'views/single_view.php';