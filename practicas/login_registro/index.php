<?php

// # inicio de sesion 
session_start(); 

if(isset($_SESSION['user'])){
  header('Location: views/content_view.php');
}else{
  header('Location: sign_up.php');
}