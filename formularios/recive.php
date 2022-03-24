<?php 
  /**
   *  Con el metodo $_POST nosotros podemos enviar datos. Con este podemos mostrar los datos que sea importantes y el cliente no pueda
   *  manipular. Siempre que sea informacion sensible, se usara el metodo post 
   * 
   */

  # Como en nuestro formulario indicamos que se usara el metodo post, nuetras informacion que es capturada por el usuario
  # es capturada mediante esta variable $_POST, agregando toda la informacion como un arreglo. 
  //print_r($_POST);

  # dicho lo anterior  podemos ir extrayendo cada uno de los datos que el cliente ingreso para proceder a trabajar con ellos
  # se crea una condicion para que en dado caso que el cliente no haya llenado los datos, no se le permita acceder a la sig. pagina.
  //if(!$_POST){
    # esta funcion permite poder direccionar al cliente, la estructura es primero location y de ahi agregar el enlace de donde queremos direccionarlo 
    //header('Location:http://localhost/cursophp/formularios/');
  //}

/* $name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $ocupacion = $_POST['ocupation'];
    $telephone = $_POST['telephone'];
    $yearb = $_POST['yearb'];
    $sex = $_POST['sex'];
    $terms = $_POST['terms'];
    
    echo '<div class="container">
            <div class="row justify-content-center align-items-center p-4">
              <div class="col-12 col-md-6 border rounded-3 shadow p-4">
                <h1>Gracias, tu informacion ha sido capturada correctamente ' . $_POST['first_name'] . '</h1>
              </div>
            </div>
          </div>'; */

#-------------------------- TRABAJANDO CON EL METODO $_GET -------------------

# El metodo get, solo se debe usar con informacion que no sea importante, y queramos solo mostrarle la informacion al cliente 
# y no nos afecte en nada que este lo modifique 

if(!$_GET){
    header('Location:http://localhost/cursophp/formularios/');
  }

  $name = $_GET['first_name'];
    $last_name = $_GET['last_name'];
    $ocupacion = $_GET['ocupation'];
    $telephone = (int)$_GET['telephone'];
    $yearb = $_GET['yearb'];
    $sex = $_GET['sex'];
    $terms = $_GET['terms'];
    
    echo '<div class="container">
            <div class="row justify-content-center align-items-center p-4">
              <div class="col-12 col-md-6 border rounded-3 shadow p-4">
                <h1 class="text-center text-success">Gracias, tu informacion ha sido capturada correctamente ' . $_GET['first_name'] . '</h1>
              </div>
            </div>
          </div>'; 