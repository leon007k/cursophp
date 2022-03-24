<?php
  # esto se agrega en todas las paginas que vallamos a trabajar sesiones
  session_start();

  $_SESSION['name'] = 'Carlos';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sessions</title>
</head>
<body>
  <h1>Pagina de inicio</h1>
  <p></p>
  <a href="page2.php" >Ir a la siguiente pagina.</a>
</body>
</html>