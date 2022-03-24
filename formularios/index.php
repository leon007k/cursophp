<?php

if($_POST){
  echo $_POST['first_name'];
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Primer formulario</title>
    <!-- Bootstrap 5  -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <style type="text/css">
      body { 
        background: url(img/bg.jpg) no-repeat;
        background-size: cover;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="row justify-content-center align-items-center p-4">
        <div class="col-12 col-md-6 border rounded-3 shadow p-4 bg-white">
          <h1 class="text-center text-success"> Bienvenidos</h1>
          <p>Ingresa los datos que se te indican a continuacion.</p>
            <!-- Formulario -->
            <!-- $_SERVER: variable global que nos permitirá regresar el nombre del archivo 
            y la ruta del jscript que se esté ejecutando en este mismo archivo. 
            Para obtener el script que se genera en este archivo tendríamos que hacerlo de la siguiente manera: 
            $_SERVER['PHP_SELF']. Para cuestiones de seguridad. 
            Debemos encerar nuestra variable en la función: htmlspecialchars() -->
            <form class="mb-3" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="get">
              <!-- Name and ocupation section -->
              <div class="row g-2">
                <div class="col-md">
                  <div class="form-floating">
                    <input
                      id="floatingInputValue"
                      class="form-control mb-3"
                      type="text"
                      placeholder="Nombre"
                      name="first_name"
                      aria-label="First Name"
                    />
                    <label for="floatingInputValue">Nombre</label>
                  </div>
                </div>
                <div class="col">
                  <div class="form-floating">
                    <input
                      id="floatingInputValue"
                      class="form-control mb-3"
                      type="text"
                      placeholder="Apellidos"
                      name="last_name"
                      aria-label="Last Name"
                    />
                    <label for="floatingInputValue">Apellidos</label>
                  </div>
                </div>
              </div>
              <div class="row g-2">
                <div class="col-md">
                  <div class="form-floating">
                    <input
                      id="floatingInputValue"
                      class="form-control mb-3"
                      type="text"
                      placeholder="Ocupacion"
                      name="ocupation"
                      aria-label="Ocupation"
                    />
                    <label for="floatingInputValue">Ocupación</label>
                  </div>
                </div>
                <div class="col">
                  <div class="form-floating">
                    <input
                      id="floatingInputValue"
                      class="form-control mb-3"
                      type="text"
                      placeholder="telefono"
                      name="telephone"
                      aria-label="Telephone"
                    />
                    <label for="floatingInputValue">Telefono</label>
                  </div>
                </div>
              </div>
              <!-- Year and month of birth section -->
              <div class="row g-2">
                <div class="col-md">
                    <label class="form-label" for="monthb">Mes de nacimiento</label>
                    <select class="form-select" aria-label="select month of birth" name="monthb" id="monthb">
                      <?php
                      $month = array('Enero','Febrero','Marzo'
                                      ,'Abril','Mayo','Junio',
                                      'Julio','Agosto','Septiembre',
                                      'Octubre','Noviembre','Diciembre');
                      foreach($month as $month){
                        echo '<option value="'.$month.'">'.$month.'</option>';
                      }
                      ?>
                    </select>
                </div>
                <div class="col-md">
                  <label for="yearb" class="form-label">Año de nacimiento</label>
                  <select class="form-select mb-3" aria-label="select year of birth" name="yearb" id="yearb">
                    <?php 
                      $act_year = date("Y");
                      for($i=1900;$i<=$act_year;$i++){
                        echo '<option value="' . $i . '">' . $i .'</option>';
                      }
                    ?>
                  </select>
                </div>
              </div>
              <!-- Sex section -->
              <label for="form-sex" class="form-label">Indica tu genero</label>
              <div class="form-check">
                <input class="form-check-input"  type="radio" name="sex" value="hombre">
                <label class="form-check-label" for="Hombre">Hombre</label>
              </div>
              <div class="form-check">
                <input class="form-check-input"  type="radio" name="sex" value="mujer">
                <label class="form-check-label" for="Mujer">Mujer</label>
              </div>
              <div class="form-check mb-4">
                <input class="form-check-input"  type="radio" name="sex" value="otro">
                <label class="form-check-label" for="Otro genero">Otro genero</label>
              </div>
              <!--Terms and conditions -->
              <div class="form-check mb-3">
                <input class="form-check-input"  type="checkbox" name="terms">
                <label class="form-check-label" for="Otro genero">Aceptar terminos y condiciones</label>
              </div>
              <button type="submit" aria-label="send" class="btn btn-primary float-end">
              Enviar
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap 5  -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
