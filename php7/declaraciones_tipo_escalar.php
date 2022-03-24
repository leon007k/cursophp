<?php

# indicamos a php que sea estricto y acepte solo numeros enteros y no tome los string como enteros si contiene numero
//declare(strict_types=1);

# con php 7 nosotros podemos declarar que este valor espera que sea de tipo entero.
function cuadrado(int $numer) {
  return $numer * $numer;
}

# no importar que sea cadena siempre y cuando sea un numero
$numer = '6';
echo 'El cuadrado de ' . $numer . ' es ' . cuadrado($numer);

