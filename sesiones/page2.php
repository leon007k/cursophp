<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pagina 2</title>
</head>
<body>
  <?php
    if($_SESSION){
      $name = $_SESSION['name'];
      echo '<h1>Hola, ' . $name .'</h1><a href="signout.php">Cerrar session</a>';
    }else{
      echo '<h1>Uppss...parece que no has iniciado sesion</h1><a href="index.php">Iniciar session</a>';
    }
  ?> 
</body>
</html>