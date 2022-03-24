<?php

# count(); permite contar
# sort(); orden ascendente
# rsort(); orden descendente
# var_dump(); permite obtener dato y valor de una variable
# print_r(); permite obtener valor de una variable

/* function calc_area_triangulo($base,$altura){
  $resultado = ($base * $altura)/2; 
  return $resultado;
}

echo 'El triangulo tiene un area de: ' . calc_area_triangulo(10,10) . ' metros cuadrados'; */

$text= ' hola mundo ';

# htmlspecialchars es una funcion que permitira que todo lo que el usuario ingrese,
#se tomara como codigo html y no afectaria nuestro codigo.
//echo htmlspecialchars($text); 

# trim(): elimina espacios al inicio y final de nuestra cadena
//echo trim($text);

# strlen(): Permite saber el tamaño de una cadena de texto 
//echo strlen($text);

#substr(): permite extraer una parte de la cadena de texto. variable, donde corta primero, hasta donde llegara
//echo substr($text, 1, 4);

#strtoupper(); permite convertir nuestra cadena de texto a letras mayusculas
//echo strtoupper($text);

#strtolower() permite convertir nuestra cadena de texto a letras minusculas
//echo strtolower($text);

#strpos() permite saber en que posicion se encuentra x letra en nuestra cadena de texto
echo strpos($text, 'h');


?>