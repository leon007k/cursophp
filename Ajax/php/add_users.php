<?php

// error_reporting(0);
// header('content-type: application/json');

// * Database data
$dbname = 'ajax_users';
$user = 'root';
$pass = '';

/**
 * * We clean the fields obtained from the form
 */
function sanitize($data){
  $sanitized = trim($data);
  $sanitized = stripslashes($sanitized);
  $sanitized = htmlspecialchars($sanitized);
  return $sanitized;
}

$name = sanitize($_POST['username']);
$age = sanitize($_POST['age']);
$country = sanitize($_POST['country']);
$email = sanitize($_POST['email']);

function validate($name, $age, $country, $email){
  switch(true){
    case $name == '':
      return false;
    break;
    case $age == '' || is_int($age):
      return false;
    break;
    case $country == '':
      return false;
    break;
    case $email == '':
      return false;
    break;
    default:
      return true;
    break;
  }
}

if(validate($name, $age, $country, $email)){
  $data = [];
  try{
    $conection = new PDO('mysql:host=localhost;dbname='.$dbname.';user='.$user.';pass='.$pass);
    $statement = $conection->prepare('INSERT INTO users(name,age,country,email) VALUES(:name, :age, :country, :email)');
    $statement->execute(array(
      ":name" => $name,
      ":age" => $age,
      ":country" => $country, 
      ":email" => $email
    ));

    if($conection->affected_rows <= 0){
      $data = ['error' => true];
    }

  }catch(PDOException $e){
    $data = [
      'error' => true
    ];
  }

  echo json_encode($data);
}
