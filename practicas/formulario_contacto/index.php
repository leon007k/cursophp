<?php 
$error = '';
$send = '';

if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  if(!empty($name)){
    $name = trim($name);
    $name = filter_var($name, FILTER_SANITIZE_STRING); 
  }else{
    $error .= 'Por favor ingresa un nombre <br>';
  }

  if(!empty($email)){
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $error .= 'Por favor ingresa un correo valido <br>'; 
    }
  }else{
      $error .= 'Por favor ingresa un correo <br>';
  }


   if(!empty($message)){
     $message = htmlspecialchars($message);
    $message = trim($message);
    $message = stripslashes($message);
  }else{
    $error .= 'Por favor ingresa el mensaje <br>';
  }

  if (!$error){
    $send_to = 'leodark17@hotmail.com';
    $affair = 'Correo enviado desde miPrimerFormulario.com';
    $content = 'De: ' . $name . ' \n';
    $content .= 'Mensaje: ' . $message;

    mail($send_to, $affair, $content);
    $send = true;  
  }

}
// concatenamos este archivo con el index que contiene el formulario
require('index.view.php');