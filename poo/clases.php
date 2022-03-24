<?php

class person {

  ## estas son propiedades
  public $name; 
  public $age;
  public $nacionality;
  
  # estos son metodos
  public function saysomething(){
    echo 'Hola mundo';
  }

}

# primer humano
$human = new Person(); # esto seria un objeto
$human->name = 'Carlos';
$human->age = 23;
$human->nacionality = 'Mexico';

echo $human->saysomething() . ' soy ' . $human->name . '<br>';
  

#segundo humano
$human = new Person();
$human->name = 'Esmeralda';
$human->age = 22;
$human->nacionality = 'Mexico';

echo $human->saysomething() . ' soy ' . $human->name . '<br>';


