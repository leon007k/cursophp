<?php

require 'functions.php';
$connection = connection('galeria_practica','root','');

if(!$connection){
  die('Error con la conexion');
}

/* 
* llenado de la bd 
for($i = 1; $i <= 16; $i++){
  $statement = $connection->query("INSERT INTO galeria_practica.images(title,image,text)  VALUES('imagen ". $i ."', '". $i .".jpg','Lorem ipsum dolor sit amet consectetur adipisicing elit. Error fugit quo earum vel! Deleniti natus culpa tempora delectus. Earum doloremque molestiae quidem fuga cumque beatae vero placeat vel, sunt inventore.')");
}
*/
$maxphotos = 6;
$actual_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$start = ($actual_page > 1) ? $actual_page * $maxphotos - $maxphotos : 0;

$statement = $connection->prepare("SELECT * FROM images LIMIT $start, $maxphotos");
$statement->execute();
$photos = $statement->fetchAll();

if(!$photos){
  header("Location: index.php");
}

//# sirve para obtener el total de nuestro contenido a extraer
$statement = $connection->prepare("SELECT count(*) as totalFilas FROM images");
$statement->execute();
$totalPost = $statement->fetch()['totalFilas'];

//# sirve para obtener el total de paginas
$total_pages = ceil($totalPost / $maxphotos);


require 'views/index_view.php';