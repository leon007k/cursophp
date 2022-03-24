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
      <h1 class="title text-center mb-5 mt-3"><?php echo (!empty($photo['title'])) ? $photo['title'] : 'Foto: ' . $photo['image']; ?></h1>
      <div class="col-12 col-md-8">
         <img src="fotos/<?php echo $photo['image']; ?>" alt="<?php echo $photo['title']; ?>" class="img-fluid d-block mx-auto mb-3">
         <p class="description">
           <?php echo (!empty($photo['text'])) ? $photo['text'] : 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam ducimus, eaque animi maiores quae porro sit? Totam, doloremque deserunt rem veniam expedita inventore facilis, repellendus, in adipisci exercitationem placeat. Corrupti?'; ?>
         </p>
         <a href="index.php" class="btn btn-primary"><span class="iconify" data-icon="ion:caret-back-outline"></span> Regresar</a>
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