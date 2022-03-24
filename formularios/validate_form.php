<?php
  # $__SERVER['REQUEST_METHOD']: Mediante esta forma podemos acceder al método de envió 
  # con esta condicion validamos que los datos hayan sido enviados mediante el metodo GET o POST
  # Esta es la mejor forma Mas sin embargo si tenemos dos formularios no podremos sabrer cual de los dos ha sido enviado
/*if ($_SERVER['REQUEST_METHOD'] == 'GET') {
  echo 'Se enviaron por el metodo GET';
}else{
  echo 'Se enviaron por el metodo POST';
}*/

# validamos que el name submit haya sido setiada esto quiere decir que haya sido creada por lo tanto
# se haya enviado. Mediante esta condicion podemos validar incluso de cual formulario ha sido enviada la inf
if (isset($_POST['submit'])){
  echo 'Los datos se enviaron correctamente';
  print_r($_POST['submit']);
}