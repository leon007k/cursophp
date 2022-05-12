<?php require 'header.php'; ?>

  <div class="container adjust-content-page" id="InfoBlog">
    <div class="row d-flex justify-content-center pt-4 pb-4">
        <div class="col-12 col-md-5 pt-3 pb-3 shadow mb-4 rounded bg-light">
          <h2 class="bold title">Iniciar sesión</h2>
          <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
            <div class="input-group mb-3">
             <input class="form-control" type="text" name="user" placeholder="usuario o correo electronico">
            </div>
             <div class="input-group mb-3">
             <input class="form-control" type="password" name="password" placeholder="contraseña">
            </div>
            <input type="submit" class="btn btn-primary float-end" name="submit" value="Iniciar sesión">
          </form>
        </div>
    </div>
  </div>

<?php require 'footer.php'; ?> 