<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Paginacion</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <div class="row pt-4 pb-4">
      <div class="col-12 col-md-8 offset-md-2 shadow rounded mb-4">
        <div id="Info_container" class="pb-4">
          <h1 class="text-center text-success">Articulos</h1>
          <ul class="list-group unstyle-list d-grid gap-3">
            <?php
            //# generamos nuestro contenido de la bd
            foreach ($content_query as $content){?>
            <li class="list-group-item"><?php echo $content['Id'] . '.- ' . $content['Articule'];?></li>
            <?php } ?>
          </ul>
        </div>
      </div>
      <div class="col-12 col-md-8 offset-md-2 ps-md-0">
        <!-- indicamos la cantidad de paginas y articulos -->
       <?php echo '<p class="small">Pagina ' . $page . ' de ' . $totalpage . ' paginas ('. $totalarticule .' Articulos)' .'</p>'; ?>
          <nav>
          <ul class="pagination d-inline-flex gap-2">
            <?php 
             // # activamos o desactivamos el btn de next  
            if($page == 1 || (int)$_GET['page'] < 1){?>
            <li class="page-item disabled">
             <span class="page-link" aria-hidden="true">&laquo;</span>
            </li>
            <?php }else{ ?>
            <li class="page-item">
              <a class="page-link" href="?page=<?php echo $page > 1 ? $page - 1 : ''; ?>"><span aria-hidden="true">&laquo;</span></a>
            </li>
            <?php } 
            //# generamos nuestro paginado 
            for($i = 1; $i <= $totalpage; $i++){ ?>
            <li class="page-item <?php echo (int)$_GET['page'] == $i ? 'active' : '' ?>">
              <a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
            </li>
            <?php }
            //# activamos o desactivamos nuestro btn de previus 
            if($page < $totalpage ){
            ?>
            <li class="page-item">
              <a class="page-link" href="?page=<?php echo  $page > 1 ? $page + 1 : ''; ?>"><span aria-hidden="true">&raquo;</span></a>
            </li>
            <?php }else{ ?>
            <li class="page-item disabled">
             <span class="page-link" aria-hidden="true">&raquo;</span>
            </li>
            <?php }?>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</body>
</html>