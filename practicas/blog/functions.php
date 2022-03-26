<?php

/**
 * * Realizamos la conexion a la base de datos
 */
function conection($bd_config){
  try{
    $conection = new PDO('mysql:host=localhost;dbname='.$bd_config['database'], $bd_config['user'],$bd_config['password']);
    return $conection;
  }catch(PDOException $e){
    return false;
  }
}

/**
 * * limpiamos los campos obtenidos del formulario
 */
function sanitize($data){
  $sanitized = trim($data);
  $sanitized = stripslashes($sanitized);
  $sanitized = htmlspecialchars($sanitized);
  return $sanitized;
}

/**
* * Obtenemos la pagina en la que nos encontramos
*/
function actual_page(){
  return isset($_GET['page']) ? (int)$_GET['page'] : 1;
}

/**
* * Obtenemos el contenido del blog
*/
function get_post($post_to_page, $conection){
  $start = (actual_page() > 1) ? actual_page() * $post_to_page - $post_to_page : 0;
  $setence = $conection->prepare("SELECT * FROM articulos LIMIT $start, $post_to_page");
  $setence->execute();
  return $setence->fetchAll();
}

/**
 * * Obtenemos el id del articulo y lo sanitizamos
 */
function idArticule($id){
  return sanitize((int)$id);
}

/**
 * * Obtenemos el contenido del articulo
 */
function get_post_to_id($conection, $id){
  $result = $conection->prepare('SELECT * FROM articulos where id = :IdArticule LIMIT 1');
  $result->execute(array(':IdArticule'=> $id));
  $result = $result->fetchAll();
  return ($result) ? $result : false;
}

/**
 * * Obtenemos el numero de paginas
 */
function numberPages($post_to_page, $conection){
  $total_post = $conection ->prepare('SELECT count(*) as total from articulos');
  $total_post->execute();
  $total_post = $total_post->fetch()['total'];

  $num_pages = ceil($total_post / $post_to_page);
  return $num_pages;
}

/**
 * * Cambiamos el formato a la fecha
*/
function formatdate($date){
  $timestamp = strtotime($date);
  $months = ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'];

  $day = date('d', $timestamp);
  $month = date('m', $timestamp) - 1;
  $year = date('y', $timestamp);

  $date = $day . ' de ' . $months[$month] . ' del ' . $year;
  return $date;
}
