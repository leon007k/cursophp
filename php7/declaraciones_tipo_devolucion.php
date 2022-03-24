<?php 

# con esta estructura estamos indicando que esta funcion solo va a devolver valores enteros  
function showAge() : int {
  $edad = '23';
  return $edad;
}

echo showAge();