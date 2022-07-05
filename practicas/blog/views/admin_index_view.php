<?php
  require '../views/header.php';
?>
  <div class="container" id="contentBlog">
    <div class="row pt-4 pb-4">
      <h2 class="title bold mb-3">Panel de control</h2>
      <div class="col-12 mb-2">
        <a href="newPost.php" class="btn btn-primary mr-1">Nuevo articulo</a>
        <a href="logout.php" class="btn btn-outline-danger">Cerrar sesión</a>
      </div>
        <?php foreach($posts as $post){?>
        <div class="col-12 col-md-8 offset-md-2 pt-3 pb-3 shadow mb-4 rounded">
          <h3 class="title bold"><?php echo $post['id'] . '.-' . $post['titulo'];?></h3>
          <a type="button" class="btn btn-primary mr-1" href="edit.php?id=<?php echo $post['id']; ?>">Editar</a>
          <a type="button" class="btn btn-secondary mr-1" href="../single.php?id=<?php echo $post['id']; ?>">Ver</a>
          <a type="button" class="btn btn-light" href="erase.php?id=<?php echo $post['id'];?>">Borrar</a>
        </div>
        <div class="clearfix"></div>
        <?php } ?>
    </div>
    <script nonce rel="preload" as="script" async type="text/javascript">
      // * Se agrega Jscrip para evitar huecos en el footer de la pagina
      let post = document.querySelectorAll('.col-12.shadow.rounded');
      if(post.length < 3){
        let container = document.querySelector('#contentBlog');
        container.classList.add('adjust-content-page');
      }
    </script>
    <?php require '../pagination.php'; ?>
  </div>
<?php require '../views/footer.php'; ?>