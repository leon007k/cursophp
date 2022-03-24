<?php 
/**   Operadores aritmeticos:
 *  + Suma
 *  - Resta
 *  / Division
 *  % modulo
 */
echo '<h3>Operadores aritmeticos</h3>';

$x = 10;
$y = 5;
$result1 = $x + $y;
$result2 = $x - $y;
$result3 = $x / $y;
$result4 = $x % $y;
$result5 = $x * $y;

echo 'suma = ' . $result1 . '<br>';
echo 'resta = ' . $result2 . '<br>';
echo 'division = ' . $result3 . '<br>';
echo 'modulo(restante) = ' . $result4 . '<br>';
echo 'multiplicacion = ' . $result5 . '<br>';

/**   Operadores de asignacion
 *
 *  =
 *  =+
 *  -=
 *  *=
 *  /=
 */
echo '<h3>Operadores de asignacion</h3>';

$a = 10;
$b = 20;
$a *= 2;
echo $a . '<br>';

/**   Operadores de comparacion:
 * 
 *  ==
 *  ===
 *  !=,<>
 *  !==
 *  <
 *  >
 *  >=
 *  <=
 *  isset() valida que el campo no veanga vacio 
 * 
*/
echo '<h3>Operadores de comparacion</h3>';

$c = '10';
if ($c === '10' and isset($c)){ //valida que sea del mismo valor y tipo (int,string,float,etc)
  echo 'es identico';
}else{
  echo 'es diferente';
}

/**   Operadores de incremente:
 * 
 *  ++$x
 *  $x++
 *  --$x
 *  $x--
 * 
*/
echo '<h3>Operadores de incremento</h3>';

$d = 10;
#$d++; incrementa despues demostrarlo
#++$d incrementa antes de mostrar
echo 'Incrementa despues de mostrar ' . $d++ . '<br>';
echo 'Numero incrementado '  . $d . '</br>';
echo 'Incrementa antes de mostrar ' . ++$d . '<br>';

/**   Operadores de cadenas:
 * 
 *  .
 *  .=
 * 
*/
echo '<h3>Operadores de cadenas</h3>';

$texto = "primera cadena";
$texto .= " segunda candena";
echo $texto;


?>