<?php 

// Permite Leer el archivo
//echo file_get_contents('documento.txt');

// Agregar contenido al archivo 
//file_put_contents('documento.txt', "hola mundo \n", FILE_APPEND);

file_put_contents('documento.txt','');

for($i = 1; $i <= 10; $i++){
  file_put_contents('documento.txt',"$i \n", FILE_APPEND);
}