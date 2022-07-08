<?php
error_reporting(0);
header('Content-Type: application/json; charset=UTF-8');

$dbname = 'ajax_users';
$user = 'root';
$pass = '';

try {
  $conection = new PDO('mysql:host=localhost;dbname='.$dbname.';user='.$user.';pass='.$pass);

  $statement = $conection->prepare("SELECT * from users");
  $statement->execute();
  $result = $statement->fetchAll();
  $data = [];

  foreach($result as $row){
    $user = [
      'id' => $row['id'],
      'name' => $row['name'],
      'age' => $row['age'],
      'country' => $row['country'],
      'email' => $row['email']
    ];
    // * Nos permite agregar el contenido del array a otro array
    array_push($data, $user);
  }

}catch(PDOException $e){
 $data = [
  'error' => true
 ];
}

 echo json_encode($data);


