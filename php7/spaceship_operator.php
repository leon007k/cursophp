<?php

// Regresa 1 si el valor en la izquierda es mayor que el de la derecha
// Regresa 0 si los valores en ambos lados son iguales
// Regresa -1 si el valor de la derecha es mayor que el de la izquierda 

//echo 1 <=> 1;

$arreglo = array(5,3,2,4,1);

/*function comparar($a, $b){
  if($a == $b){
    return 0;
  }elseif($a > $b){
    return 1;
  }else{
    return -1;
  }
}*/

function comparar($a, $b){
  return $a <=> $b;
}

# Nos permite ordenar un arreglo por la funcion que nosotros le pasemos
usort($arreglo,'comparar');
# la funcion implode permite mostrar en pantalla en un arreglo pero dividio por lo que le indiquemos
echo implode("\n", $arreglo);