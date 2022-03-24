<?php

class NewUsers {
  public $name;
  public $age;
  public $country;

  # se ejecuta cada vez que hagamos una instancia de nuestra clase 
  function __construct($name, $age, $country){
    $this->name = $name;
    $this->age = $age;
    $this->country = $country;
  }

  public function ShowInfo(){
    # con $this accedemos a las propiedades de nuestra clase, haciendo referencia a este objeto
    $mex = '';
    if($this->country == 'Mexico'){
      $mex.= ' y Viva Mexico Cabrones!!';
    }  
    echo $this->name . ' tiene ' . $this->age . ' años y es de ' . $this->country . $mex; 
  }
}

# Al hacer tener nuestro constructor podemos permitir que se ejecute dos veces sin 
$carlos = new NewUsers('Carlos',23,'Mexico');
$carlos->showInfo();

echo '<br>';

$esmeralda = new NewUsers('Esmeralda',23,'Brazil');
$esmeralda->showInfo();