<?php 
# Plublic
// Se puede acceder a ellas desde cualquier parte

# Protected 
// Solo se accedera a ellas desde la clase que fue creada y en los que hereden de ella

# Private
// Solo se accede a ella desde la clase en la que fue creada

class Humans {
  # Propiedades de los humanos
  public $name;
  public $last_name;
  public $gender;
  public $age;
  public $country;

  # constructor del objeto
  function __construct($name, $last_name, $gender, $age, $country){
    $this->name = $name;
    $this->last_name = $last_name;
    $this->gender = $gender;
    $this->age = $age;
    $this->country = $country;
  }

  # funcion para mostrar los datos del objeto
  public function ShowInfo(){
    return $this->name . $this->last_name . ' es ' . $this->gender . '  y tiene ' . $this->age . ' años. Es de ' . $this->country;
  }
}

# hereda los datos de humans agrenado informacion de carrera que estudia
class Student extends Humans {
  function __construct($name, $last_name, $gender, $age, $country, $carrer){
    parent::__construct($name, $last_name, $gender, $age ,$country); #extraemos los campos de humans
      $this->carrer = $carrer;
  }

}

# hereda los datos de humano agregando informacion sobre su profesion
class Proffesion extends Humans {
  function __construct($name, $last_name, $gender, $age, $country, $proffesion){
     #extraemos los campos de humans del constructor padre para sobreescribirlo
    parent::__construct($name, $last_name, $gender, $age, $country);
    $this->proffesion = $proffesion;
  }

}


$carlos = new Proffesion('Carlos Leonardo ','Andrade Lopez','hombre',23,'Mexico',' Ing. Sistemas Computacionales'); 
echo $carlos->showInfo() . ' y es ' . $carlos->proffesion . '<br>';
$esmeralda = new Student ('Esmeralda',' Ochoa Zarate','mujer',22,'Mexico',' Psicologa');
echo $esmeralda->showInfo() . ' y estudia ' . $esmeralda->carrer;