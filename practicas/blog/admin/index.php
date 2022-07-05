<?php


// * ARCHIVO INDEX DEL ADMIN

session_start();
require 'config.php';
require '../functions.php'; 

// # Check session
existSession($_SESSION['admin']);

$conection = conection($bd_config);

if(!$conection){
  header('Location: ../error.php');
}

$posts = get_post($blog_config['post_admin_page'], $conection);

$num_pages = numberPages($blog_config['post_admin_page'], $conection, 'index.php');


require '../views/admin_index_view.php';