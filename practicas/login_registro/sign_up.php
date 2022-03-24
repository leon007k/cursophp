<?php

session_start();

// # si ya inicio sesión, redireccionar lo al contenido
if(isset($_SESSION['user'])){
  header('Location: index.php');
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $user = filter_var(strtolower($_POST['user']), FILTER_SANITIZE_STRING);
  $password = $_POST['password'];
  $password2 = $_POST['confirm_password'];

  echo "$user . $password . $password2";
  $errores = '';

  if(empty($user) || empty($password) || empty($password2)){
    $errores .= 'Favor de rellenar todos los datos correctamente';
  }else{
    try{
      $conexion = new PDO('mysql:host=localhost;dbname=curso_login','root','');
    }catch(PDOException $e){
      echo $e->getMessage();
    }

    // ! valida que el usuario ingresado, no exista
    $statement = $conexion->prepare('SELECT * FROM users where user = :username LIMIT 1');
    $statement->execute(array(':username' => $user));
    $result = $statement->fetch(); //# devuelve false si el usuario no existe, devuelve nombre usuario repetido

    if($result != false){
      $errores .= 'Nombre de usuario, ya existente. <a href="login.php">Ingresa a tu cuenta</a> o intenta con otro usario';
    }

    // ! encriptamos password y validamos password iguales
    $password = hash('sha512', $password);
    $password2 = hash('sha512', $password2);

    if($password != $password2){
      $errores .= 'Las contraseñas no coinciden, favor de intentarlo nuevamente.';
    }
  }

  // # Si el usuario ingreso correctamente sus datos, registrarlo
  if($errores == ''){
    $statement = $conexion->prepare('INSERT INTO users (user,password) VALUES(:user, :password)');
    $statement->execute(array(':user' => $user, ':password' => $password));
    // @ redireccionamos al usuario a la pagina  de login para que inicie sesión
    header('Location: login.php');
  }
}



require 'views/sign_up_view.php';
