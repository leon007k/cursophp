<?php 
  $names= array('Leonardo','Esmeralda','Maribel','Gimena','Carlos','Maribel','Peluche');

  //echo $names[0];

?>

<!DOCTYPE html> 
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Mis familiares</title>
</head>
<body>
  <h1>Mi Familia</h1>
  <ul>
    <?php
      foreach($names as $names){ //foreach(parametro(arreglo) que pasaremos as por cada parametro(sobrenombre)
        echo '<li>' . $names . '</li>';                       //ejecutame algo por cada parametro
      }
    ?>
  </ul>
</body>
</html>