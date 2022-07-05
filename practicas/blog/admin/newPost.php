<?php

session_start();
require 'config.php';
require '../functions.php';

existSession($_SESSION['admin']);

$conection = conection($bd_config);

if (!$conection){
  header('Location: ../error.php');
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $title = sanitize($_POST['title']);
  $resume = sanitize($_POST['resume']);
  $text = htmlspecialchars($_POST['text']);
  $thumb = $_FILES['thumb']['tmp_name'];

  // * guardamos la imagen en la carpeta correspondiente
  $images = '../' . $blog_config['carpeta_images'] . $_FILES['thumb']['name'];
  move_uploaded_file($thumb, $images);

  // * Cargamos el contenido del nuevo articulo a la bd
  $statemet = $conection ->prepare('INSERT INTO articulos(titulo,extracto,texto,thumb) VALUES(:title , :resume, :text, :thumb)');
  $statemet -> execute(array(
    ":title" => $title,
    ":resume" => $resume,
    ":text" => $text,
    ":thumb" => $_FILES['thumb']['name']
  ));

  header('Location: ' . ROUTE . '/admin' );

}

require '../views/newPost_view.php';