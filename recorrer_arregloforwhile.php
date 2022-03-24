<?php
$meses = array('Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto'
                ,'Septiembre','Octubre','Noviembre','Diciembre'); 

//echo count($meses);

$numeros = array(1,2,3,4,5,6,7,8,9,10);
?>

<?php ?>
<!DOCTYPE html> 
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>recorrer arreglo</title>
</head>
<body>
  <div style="display:flex;justify-content:center;padding:0 100px;">
    <div style="width:50%;">
      <h1>Arreglo For</h1>
      <ul>
        <?php
          for($i = 0; $i < count($meses); $i++){
            echo '<li>' . $meses[$i] . '</li>';
          }
        ?>
      </ul>
    </div>
    <div style="width:50%;">
      <h1>Arreglo While</h1>
      <ul>
        <?php 
          $x = 0;
          while($x < count($numeros)){
            echo '<li>' . $numeros[$x] . '</li>';
            $x++;
          } 
        ?>
      </ul>
    </div> 
  </div>
</body>
</html>