<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">}
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, user-scale=no,initial-scale=1.0,maximum-scale=1.0, minimum-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
  <script src="https://code.iconify.design/2/2.1.2/iconify.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Logica de programacion</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1 class="text-primary">Practica de ejercicios de programacion</h1>
        <h5>Primer ejercicio: Dado un arreglo, que contiene una cadena, buscar dentro del arreglo, la cantidad de "ab" que se encuentran</h5>
        <?php
        /*if (strpos('abcdd','ab') !== false){
          echo 'true';
        }*/

        $arr = array('abcd','aavv','abef','ddab');
        echo '<pre>';
        print_r($arr);
        echo '</pre>';

        /*foreach($arr as $value){
          echo $value . '<br>';
        }*/
        echo '<p>Forma 1</p>';
        $str = implode(', ',$arr);
        $count = substr_count($str, 'ab');
        echo '<p>cantidad con metodo corto: ' . $count . '</p>'; 

        echo '<p>Forma 2</p>';
        $length = count($arr);
        $count = 0;
        for($i=0;$i<$length;$i++){
          $str = $arr[$i];
          if(strpos($str,'ab') !== false){
            $count++;
          }
          /*echo $count;*/
        }
        echo '<p>cantidad con for: ' . $count . '</p>';
        ?>
        <hr>
        <h5>Dado un arreglo que contiene frases, se requiere saber si estas contiene todas las letras del abecedario. Deberas imprimir 0 si no las tiene y 1 si las tiene. 
        Al final se debe mostranr una cadena que contenga los valores 0 y 1, dependiendo la cadena proporcionada.</h5>
        <?php
          $arr = array(
            'exhíbanse politiquillos zafios, con orejas kilométricas y uñas de gavilán.',
            'hola mundo',
            'el viejo Señor Gómez pedía queso, kiwi y habas, pero le ha tocado un saxofón.',
            'hola mundo',
            'le gustaba cenar un exquisito sándwich de jamón con zumo de piña y vodka fría.'
          );
          echo '<pre>';
          print_r($arr) ;
          echo '</pre>';
        
          /*$exp = range('a','z');
          $arrnum = array();
          $letters = str_split($arr);
            if(array_intersect($exp,$arr)){
              $num = 1;
              $arrnum[] = $num;
            }else {
              $num = 0;
              $arrnum[] = $num;
            }
          echo implode(', ',$arrnum);*/
            $alphabet = range('a', 'z');
    $sentence = strtolower($arr);
    $letters = str_split($sentence);
    $letters = array_unique($letters);
    if (count(array_intersect($alphabet, $letters)) == 26) {
        echo true;
    } else {
        echo false;
    }

        ?>
      </div>
    </div>
  </div>
</body>
</html>