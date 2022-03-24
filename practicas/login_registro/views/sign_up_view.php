<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrate</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
</head>
<body>
  <div class="container">
    <div class="row d-flex justify-content-center align-items-center">
      <div class="col-12 col-md-5 mt-2">
        <?php if(!empty($errores)){?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <?php echo $errores;?>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php }?>
        <div class="card p-3 shadow">
          <h1>Registrarse</h1>
          <hr class="division"/>
          <div clas="card-body">
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" name="signup">
              <label class="form-label" for="email">Nombre usuario</label>
              <div class="input-group mb-3"> 
                <span class="input-group-text"><span class="iconify" data-icon="bx:bxs-user"></span></span>
                <input class="form-control" name="user" type="text" id="user" aria-label="Usuario" placeholder="asdeasLe">
              </div>
              <label class="form-label" for="password">Contraseña</label>
              <div class="input-group mb-3">
                <span class="input-group-text"><span class="iconify" data-icon="jam:padlock-f"></span></span>
                <input class="form-control" name="password" type="password" id="password" aria-label="Password" placeholder="Contraseña">
              </div>
              <label class="form-label" for="confirm_password">Confirmar contraseña</label>
              <div class="input-group mb-3"> 
                <span class="input-group-text"><span class="iconify" data-icon="jam:padlock-f"></span></span>
                <input class="form-control" name="confirm_password" type="password" id="confirm_password" aria-label="Password" placeholder="Repetir Contraseña">
              </div>
              <button class="btn btn-primary float-end">Registrarse</button>
            </form>
          </div>
          <div class="card-footer">
            <p>Si ya estas registrado, <a href="login.php" class="btn-link" onclick="login.submit()">inicia sesión</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>