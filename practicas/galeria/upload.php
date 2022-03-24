<?php
require 'functions.php';

$connection = connection('galeria_practica','root','');
$messages = '';

if(!$connection){
  die();
}

if($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_FILES)){
  // * Retorna arreglo de la imagen subida
  $check = @getimagesize($_FILES['photo']['tmp_name']); 
  // * Validamos que sea una imagen
  if($check != false){
    $destiny = 'fotos/';
    // * ruta de la imagen a subir con nombre de la imagen
    $route = $destiny . $_FILES['photo']['name']; 
    // * guardamos el archivo en la carpeta
    $upload = move_uploaded_file($_FILES['photo']['tmp_name'], $route);

    $statement = $connection->prepare('INSERT INTO images (title,image,text)
                                    VALUES(:title, :image, :text)');
    $statement->execute(
      array(
        ':title'=>$_POST['title'],
        ':image'=>$_FILES['photo']['name'],
        ':text'=>$_POST['description']
      )
    );

    header('Location:index.php');

  }else{
    $messages = 'El archivo subido no corresponde a una imagen o esta muy pesada, favor de intentarlo de nuevo';
  }
}

require 'views/upload.view.php';