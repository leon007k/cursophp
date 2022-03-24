<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Primer formulario php</title>
  <link rel="stylesheet" href="index_style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-12 col-md-6">
        <h1>Lo mas importante, es escucharte</h1>
        <p>De favor ingresa tus datos y la petición que deseas hacernos.</p>
        <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
          <input type="text" class="form-control" id="name" name="name" placeholder="Nombre" value="<?php if(!$send && isset($name)) echo $name ?>">
          <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="<?php if(!$send && isset($email)) echo $email ?>">
          <textarea name="message" class="form-control" id="message" placeholder="Mensaje"><?php if(!$send && isset($message)) echo $message ?></textarea>
          <?php if(!empty($error)):?>
              <div class="alert alert-error">
                <?php echo $error; ?>
              </div>
              <?php elseif($send): ?>
                <div class="alert alert-success">
                  <p>Tus datos han sido enviados correctamente. Gracias !!</p>
                </div>
            <?php endif; ?>
          <input type="submit" class="btn btn-primary float-end" name="submit" value="Enviar Correo">
        </form>
      </div>
    </div>
  </div>
</body>
</html>