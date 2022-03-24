<?php
class PersonStatic {

  # al ser estatica, podemos acceder a ella sin necesidad de instanciar a la clase
  public static $dia = '31 de octubre';

  public static function bondia($name=null) { 
    if($name){
      return 'Hola buen dia ' . $name;
    }else{
      return 'Hola buen dia';
    }
  }

}

echo PersonStatic::bondia('Carlos') . '<br>';
echo PersonStatic::$dia;