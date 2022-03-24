<?php

// # Obtenemos nombre del archivo con su extensión
pathinfo('documento.txt', PATHINFO_BASENAME);

// # obtenemos el directorio padre del archivo
pathinfo('usuario/carpeta/documento.txt', PATHINFO_DIRNAME);
dirname('carpeta1/carpeta2/archivo.php'); #retorna carpeta1/carpeta2

// # Obtenemos la extensión del archivo
pathinfo('usuario/carpeta/documento.txt', PATHINFO_EXTENSION);
basename('carpeta1/carpeta/archivo.php','.php'); #retorna php

// # Obtenemos el nombre del archivo
pathinfo('usuario/carpeta/documento.txt', PATHINFO_FILENAME);
basename('carpeta1/carpeta/archivo.php'); #retorna archivo.php

// # Permite que obtengamos hacer una busqueda de archivos
/*$result = glob('a*.php');
echo '<pre>';
print_r($result);*/

// # Permite hacer una busqueda, agregando varios patrones de busqueda
$result = glob('*.{php,html,txt}', GLOB_BRACE);
echo '<pre>';
print_r($result);