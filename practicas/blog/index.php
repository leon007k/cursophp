<?php
require 'admin/config.php';
require 'functions.php';

$conection = conection($bd_config);

if(!$conection){
  header('Location: error.php');
}

$posts = get_post($blog_config['post_to_page'], $conection);

//print_r($posts);

$num_pages = numberPages($blog_config['post_to_page'], $conection, 'index.php');

if(!$posts){
  header('Location: error.php');
}

require 'views/index_view.php';

?>