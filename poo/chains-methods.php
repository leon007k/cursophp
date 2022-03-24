<?php 

class UserX {

  function __construct($name,$email){
    $this->name = $name;
    $this->email = $email;
  }

  public function ShowName(){
    echo 'Su nombre es: ' . $this->name . '<br>'; 
    return $this;  
  }

  public function ShowEmail(){
    echo 'Su correo es: ' . $this->email;
    return $this; # Se agrega para que se permita hacer el uso de una cadena de metodos
  }

}

$carlos = new UserX('Carlos','leonandrade6807@gmail.com');
# Esto es una cadena de metodos.
# Para que esto sea posible sera necesario que nuestra propiedad retorne una valor.
$carlos->ShowName()->ShowEmail();