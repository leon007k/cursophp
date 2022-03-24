<?php
// # funcion que cuenta las visitas del archivo creado
function count_users(){
  $archive = 'contador.txt';

  if(file_exists($archive)){
    $count = file_get_contents($archive) + 1;
    file_put_contents($archive,$count);
    return $count; 
  }else{
    // ! crea un archivo y lo inicia con el valor 1
    file_put_contents($archive, 1);
    return 1;
  }

}

//count_users();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100&display=swap" rel="stylesheet">
  <title>Contador visitas</title>
</head>
<body>
  <h1>Contador de visitas</h1>
  <div class="visitantes">
    <p class="num-visitas"> <?php echo count_users(); ?> <br> <span class="text-visitas">visitas</span></p>
  </div>
</body>
</html>