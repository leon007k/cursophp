<?php
  require 'header.php';
?>
  <div class="container" id="InfoBlog">
    <div class="row pt-4 pb-4">
        <div class="col-12 col-md-8 offset-md-2 pt-3 pb-3 shadow mb-4 rounded">
          <h2 class="bold title"><?php echo $posts['titulo']; ?></h2>
          <p class="date"><?php echo formatdate($posts['fecha']); ?></p>
          <div class="thumb">
              <img src="<?php echo ROUTE;?>/imagenes/<?php echo $posts['thumb']?>" class="img-fluid" alt="<?php echo $posts['titulo']; ?>">
          </div>
          <p class="extracto"><?php echo $posts['texto']; ?></p>
        </div>
    </div>
  </div>
<?php require 'footer.php'; ?>