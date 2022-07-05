<?php
  require 'header.php';
?>
  <div class="container" id="contentBlog">
    <div class="row pt-4 pb-4">
        <?php foreach($posts as $post){?>
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
   <script nonce rel="preload" as="script" async type="text/javascript">
      // * Se agrega Jscrip para evitar huecos en el footer de la pagina
      let post = document.querySelectorAll('.col-12.shadow.rounded');
      if(post.length < 2){
        let container = document.querySelector('#contentBlog');
        container.classList.add('adjust-content-page');
      }
    </script>
<?php require 'footer.php'; ?>