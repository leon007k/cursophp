<?php
require 'functions.php';

$connection = connection('galeria_practica','root','');

if(!$connection){
  die();
}

$id = isset($_GET['id']) ? (int)$_GET['id'] : false;

if(!$id){
  header('Location: index.php');
}

$statement = $connection->prepare('SELECT * FROM images where id = :id');
$statement->execute(array(':id'=>$id));

$photo = $statement->fetch();
if(!$photo){
  header('Location: index.php');
}

require 'views/photo.view.php';