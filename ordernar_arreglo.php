<?php
$meses = array('Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto'
                ,'Septiembre','Octubre','Noviembre','Diciembre'); 

$numeros = array(1,2,3,4,5,6,7,8,9,10);

#---ordena alfabeticamente-ascendentemente
sort($meses); 

#---ordena descentemente
rsort($numeros); 

?>

<!DOCTYPE html> 
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Ordenar arreglo</title>
</head>
<body>
  <div style="display:flex;">
    <div style="width:50%;">
      <h1>MESES</h1>
      <ul>
        <?php
          foreach($meses as $meses){ //foreach(parametro(arreglo) que pasaremos as por cada parametro(sobrenombre)
            echo '<li>' . $meses . '</li>';                       //ejecutame algo por cada parametro
          }
        ?>
      </ul>
    </div>
    <div style="width:50%;">
      <h1>NUMEROS</h1>
      <ul>
        <?php 
          foreach($numeros as $num){
            echo '<li>' . $num . '</li>';
          }
        ?>
      </ul>
    </div>
  </div>
</body>
</html>