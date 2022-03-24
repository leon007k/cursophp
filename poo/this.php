<?php

class Users {
  public $name;
  public $age;
  public $country;

  public function ShowInfo(){
    # con $this accedemos a las propiedades de nuestra clase, haciendo referencia a este objeto  
    echo $this->name . ' tiene ' . $this->age . ' años y es de ' . $this->country; 
  }
}

$carlos = new Users();
$carlos->name = 'Carlos';
$carlos->age = 23;
$carlos->country = 'Mexico';
$carlos->showInfo();

echo '<br>';

$esmeralda = new Users();
$esmeralda->name = 'Esmeralda';
$esmeralda->age = 22;
$esmeralda->country = 'Mexico';
$esmeralda->showInfo();