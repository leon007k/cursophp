<?php

session_start();

if(isset($_SESSION['user'])){
  header('Location: index.php');
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $user = filter_var(strtolower($_POST['user']), FILTER_SANITIZE_STRING);
  $password = $_POST['password'];
  $password = hash('sha512', $password);

  $errores = '';
  if( empty($user) || empty($password) ){
    $errores = 'Favor de rellenar todos los datos correctamente';
  }else{
    try{
      $conexion = new PDO('mysql:host=localhost;dbname=curso_login','root','');
    }catch(PDOException $e){
      echo $e->getMessage();
    }

    
    $statement = $conexion->prepare('SELECT * from users WHERE user = :user AND password = :password LIMIT 1');
    $statement->execute(array(':user' => $user, ':password' => $password));
    $result = $statement->fetch();

    if($result != false){
      $_SESSION['user'] = $user;
      header('Location: index.php');
    }else{
      $errores = 'Datos incorrectos, favor de intentarlo nuevamente';
    }

    //var_dump($result);
  }

}



require 'views/login_view.php';
