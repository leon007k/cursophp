<?php

abstract class Vehiculo {
  public $potencia;
  public $peso;

  function __construct($potencia,$peso){
    $this->potencia = $potencia;
    $this->peso = $peso;

    return true;
  }

  function relacionPesoPotencia(){
    if ($this->potencia>0){
      return ($this->peso/$this->potencia);
    }

    return -1;
  }

  //// devuelve el tiempo en alcanzar los 100 Km/h
  //// partiendo de cero
  //// cada tipo de vehiculo tendra una
  //// aceleracion aproximada en funcion de sus
  //// caracteristicas particulares
  abstract function aceleracionAproximada();

}

//// una Moto es un Vehiculo
class Moto extends Vehiculo{

  function __construct($potencia,$peso){
    parent::__construct($potencia,$peso);
    return true;
  }

  //// devuelve el tiempo en alcanzar los 100 Km/h
  //// partiendo de cero
  function aceleracionAproximada(){
     $coeficienteTransmision = 3.0;

     $t = $this->peso * 771.73 / (2.0 * $this->potencia * 735);
     $t = $t * $coeficienteTransmision;
     return $t;
  }
}


//// un Coche es un Vehiculo
class Coche extends Vehiculo{
  function __construct($potencia,$peso){
    parent::__construct($potencia,$peso);
    return true;
  }

  //// devuelve el tiempo en alcanzar los 100 Km/h
  //// partiendo de cero
  function aceleracionAproximada(){
     $coeficienteTransmision = 2.2;

     if ($this->potencia==0){
       return -1;
     }

     $t = $this->peso * 771.73 / (2 * $this->potencia * 735);
     $t = $t * $coeficienteTransmision;

     return $t;
  }
}

//// un coche (125CV, 1300Kg)
$coche = new Coche (125, 1300);
echo "coche (0-100): ".$coche->aceleracionAproximada();
echo "<br>";

//// una moto (60CV, 250Kg)
$moto = new Moto (60, 250);
echo "moto (0-100): ".$moto->aceleracionAproximada();
echo "<br>";