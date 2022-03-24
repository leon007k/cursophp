<?php

  $amigo = array('nombre' => 'Carlos' ,'telefono' => 8184982937, 'edad' => 23, 'pais' => 'Mexico');

  # Permite que de un arreglo puedamos extraer el dato que nosotros determinemos en el echo
  extract($amigo); 

  //echo $nombre;

  $semana = array('Lunes','Martes','Miercoles',
                  'Jueves','Viernes','Sabado','Domingo');

  # Permite extrar el ultimo valor de un arreglo, eliminando lo del arreglo y se puede asignar a una variable.
  //$last_day = array_pop($semana);

  //foreach($semana as $day){
    //echo $day . "<br />" ;
  //}

  //echo $last_day . "<br />"

  # con join podemos imprimir nuestro arreglo si necesidad de agregar un foreach. Podemos determinar como se iran separando los datos 
  //echo join('<br>', $semana);

  # Permite ordenar nuestros datos de forma reversiva (el ultimo sera le primero y el primero sera el ultimo)
  $week_reverse = array_reverse($semana);
  echo join('<br>' ,$week_reverse);

?>