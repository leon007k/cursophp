<?php
session_start();
require 'config.php';
require '../functions.php';

existSession($_SESSION['admin']);

$conection = conection($bd_config);
if(!$conection) {
  header('Location: ../error.php');
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $title = sanitize($_POST['title']);
  $resume = sanitize($_POST['resume']);
  $text = htmlspecialchars($_POST['text']);
  $id = sanitize($_POST['id']);
  $thumbSave = $_POST['thumb-save'];
  $thumb = $_FILES['thumb'];

  switch(true){
    case empty($thumb['name']):
      $thumb = $thumbSave;
    break;
    default:
      $images = '../' . $blog_config['carpeta_images'] . $_FILES['thumb']['name'];
      move_uploaded_file($_FILES['thumb']['tmp_name'],$images);
      $thumb = $_FILES['thumb']['name'];
    break;
  }

  $statemet= $conection->prepare('UPDATE articulos SET titulo = :title, extracto = :resume, texto = :text, thumb = :thumb 
                      WHERE id = :id');

  $statemet->execute(array(
    ":title" => $title,
    ":resume" => $resume,
    ":text" => $text,
    ":thumb" => $thumb,
    ":id" => $id
  ));

  header('Location: ' . ROUTE . '/admin');

}else{
  $id = idArticule($_GET['id']);

  switch(true){
    case empty($id):
      header('Location: ' . ROUTE . '/admin');
    break;
    default:
      $post = get_post_to_id($conection,$id);
      
      if(!$post){
        header('Location: ' . ROUTE . '/admin');
      }

      $post = $post[0];
    break;  
  }

}

require '../views/edit_view.php';