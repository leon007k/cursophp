<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Galeria de imagenes</title>
   <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/stylesheet_galery.css">
</head>
<body>
  <div class="container">
    <div class="row d-flex justify-content-center">
      <h1 class="title text-center mb-5 mt-3">Sube tu foto</h1>
      <?php if(isset($message)){?>
      <div class="col-12 col-md-8">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong><?php echo $message;?></strong>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      </div>
      <?php } ?>
      <div class="col-12 col-md-8">
         <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">
          <div class="mb-3">
            <label for="photo" class="form-label">Selecciona tu foto</label>
            <input type="file" id="photo" name="photo" class="form-control"/>
          </div>
          <div class="mb-3">
            <label for="title" class="form-label">Titulo de la foto</label>
            <input type="text" id="title" name="title" class="form-control">
          </div>
          <div class="mb-3">
            <label for="description" class="form-label">Descripción</label>
            <textarea class="form-control" id="description=" name="description" rows="3" placeholder="Ingresa una descripción"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Subir</button>
         </form>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-md-12 text-center"><p class="footer fw-bold">Galeria creada por Leonardo Andrade - TarzanDC</p></div>
    </div>
  </div>


  <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>