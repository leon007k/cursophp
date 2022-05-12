<?php
  require 'header.php';
?>
  <div class="container" id="contentBlog">
    <div class="row pt-4 pb-4">
        <div class="col-12 col-md-8 offset-md-2">
          <h2><?php echo $answer; ?></h2>
        </div>
        <?php foreach($result as $post){?>
        <div class="col-12 col-md-8 offset-md-2 pt-3 pb-3 shadow mb-4 rounded">
          <h2 class="bold title"><a href="single.php?id=<?php echo $post['id'];?>"><?php echo $post['titulo']; ?></a></h2>
          <p class="date"><?php echo formatdate($post['fecha']); ?></p>
          <div class="thumb">
            <a href="single.php?id=<?php echo $post['id'];?>">
              <img src="<?php echo ROUTE;?>/imagenes/<?php echo $post['thumb']; ?>" class="img-fluid" alt="<?php echo $post['titulo']; ?>">
            </a>
          </div>
          <p class="extracto"><?php echo $post['extracto']; ?></p>
          <a href="single.php?id=<?php echo $post['id'];?>" class="btn btn-primary continue">Continuar leyendo</a>
        </div>
        <div class="clearfix"></div>
        <?php } ?>
    </div>

    <?php require 'pagination.php'; ?>
  </div>
<?php require 'footer.php'; ?>