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
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
</head>
<body>
  <div class="container">
    <div class="row">
      <h1 class="title text-center mb-5 mt-3"> Mi increible galeria con PHP y MySQL</h1>
      <?php foreach($photos as $photo){?>
        <div class="col-xs-12 col-md-3 col-lg-4 content-image rounded">
          <a href="photo.php?id=<?php echo $photo['id']; ?>">
           <img class="img-fluid" src="fotos/<?php echo $photo['image']; ?>" alt="<?php echo $photo['title']; ?>"/>
          </a>
        </div>
      <?php }?>
    </div>
    <div class="row">
      <nav aria-label="paginacion">
        <ul class="pagination justify-content-between">
        <?php if($actual_page > 1){?>
          <li class="page-item"><a class="page-link" href="index.php?page=<?php echo $actual_page - 1; ?>"><span class="iconify" data-icon="ion:caret-back-outline"></span> Anterior</a></li>
        <?php }
        if($total_pages != $actual_page){ ?>
          <li class="page-item"><a class="page-link" href="index.php?page=<?php echo $actual_page + 1; ?>"><span>Siguiente <span class="iconify" data-icon="bi:caret-right-fill"></span></a></li>
        <?php } ?>
        </ul>
      </nav>
    </div>
    <div class="row">
      <div class="col-12 col-md-12 text-center"><p class="footer fw-bold">Galeria creada por Leonardo Andrade - TarzanDC</p></div>
    </div>
  </div>


  <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>