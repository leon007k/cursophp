<?php 

// Primera clase de arreglos
$FclassArray = '<div style="margin:10px auto;background-color:white;box-shadow:0 0 5px rgba(0,0,0,.5);text-align:center;width:50%;heigth:auto;padding:15px;">
                  <h1>1ma clase de arreglos indexados</h1>
                </div>';

echo $FclassArray;

# Los arreglos son como variables que nos permiten guardar multiples valores
//
#Ejemplo de un arreglo con los dias de la semana
$semana = array('Lunes','Martes','Miercoles','Jueves','Viernes','Sabado','Domingo');

#En los arreglos podemos guardar cualquier tipo de dato incluso podemos guardar un arreglo dentro de otro arreglo
$arreglo = array('esto es un string',060514,array('Esto es otro arreglo'),true);

#Ejemplo en el que mostramos los dias de la semana en pantalla a partir de nuestro arreglo llamado semana.
echo $semana[0] . '<br />';
echo $semana[1] . '<br />';
echo $semana[2] . '<br />';
echo $semana[3] . '<br />';
echo $semana[4] . '<br />';
echo $semana[5] . '<br />';
echo $semana[6] . '<br />';

// Segunda clase de arreglos. Estos son arreglos asociativos 
$FclassArray = '<div style="margin:10px auto;background-color:white;box-shadow:0 0 5px rgba(0,0,0,.5);text-align:center;width:50%;heigth:auto;padding:15px;">
                  <h1>2da Clase, Arreglos asociativos</h1>
                </div>';

echo $FclassArray;

$arreglo_asociativo = array('Nombre' => 'Carlos', 'Apellido' => 'Andrade', 'Telefono' => '8184982937', 'Pais' => 'Mexico');

echo $arreglo_asociativo['Nombre'] . '<br />';
echo $arreglo_asociativo['Apellido'] . '<br />';
echo $arreglo_asociativo['Telefono'] . '<br />';
echo $arreglo_asociativo['Pais'] . '<br />';

#Cambiar el telefono
$arreglo_asociativo['Telefono'] = '8180120576';
echo 'Numero actual: ' . $arreglo_asociativo['Telefono'];

// Segunda clase de arreglos. Estos son arreglos Multidimensionales 
$FclassArray = '<div style="margin:10px auto;background-color:white;box-shadow:0 0 5px rgba(0,0,0,.5);text-align:center;width:50%;heigth:auto;padding:15px;">
                  <h1>3ra Clase, Arreglos Multidimensionales</h1>
                </div>';

echo $FclassArray;

$arreglo_multidimensional = array(
  array('Carlos',23),
  array('Leonardo',23),
  array('Esmeralda',22)
);

echo $arreglo_multidimensional[0][0] . '<br />';
echo $arreglo_multidimensional[1][0] . '<br />';
echo $arreglo_multidimensional[2][0] . '<br />';


?>