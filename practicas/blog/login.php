<?php

session_start();

require 'admin/config.php';
require 'functions.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $user = sanitize($_POST['user']);
  $pass = sanitize($_POST['password']);

  if($user == $blog_admin['usuario'] && $pass == $blog_admin['password']){
    $_SESSION['admin'] = $blog_admin['user'];
    header('Location: ' . ROUTE . '/admin');
  }
}

require 'views/login_view.php';

