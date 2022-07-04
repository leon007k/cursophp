<?php
  require '../views/header.php';
?>
  <div class="container" id="contentBlog">
    <div class="row pt-4 pb-4">
      <h2 class="title bold mb-3">Panel de control</h2>
      <div class="col-12">
        <a href="newPost.php" class="btn btn-primary mr-1">Nuevo articulo</a>
        <a href="logout.php" class="btn btn-outline-danger">Cerrar sesión</a>
      </div>
        <?php foreach($posts as $post){?>
        <div class="col-12 col-md-8 offset-md-2 pt-3 pb-3 shadow mb-4 rounded">
          <h1 class="title bold"><?php echo $post['id'] . '.-' . $post['titulo'];?></h1>
          <a type="button" class="btn btn-primary mr-1" href="edit.php?id=<?php echo $post['id']; ?>">Editar</a>
          <a type="button" class="btn btn-secondary mr-1" href="../single.php?id=<?php echo $post['id']; ?>">Ver</a>
          <a type="button" class="btn btn-light" href="erase.php?id=<?php echo $post['id'];?>">Borrar</a>

         <?php /* <h2 class="bold title"><a href="single.php?id=<?php echo $post['id'];?>"><?php echo $post['titulo']; ?></a></h2>
          <p class="date"><?php echo formatdate($post['fecha']); ?></p>
          <div class="thumb">
            <a href="single.php?id=<?php echo $post['id'];?>">
              <img src="<?php echo ROUTE;?>/imagenes/<?php echo $post['thumb']; ?>" class="img-fluid" alt="<?php echo $post['titulo']; ?>">
            </a>
          </div>
          <p class="extracto"><?php echo $post['extracto']; ?></p>
          <a href="single.php?id=<?php echo $post['id'];?>" class="btn btn-primary continue">Continuar leyendo</a> */?>
        </div>
        <div class="clearfix"></div>
        <?php } ?>
    </div>

    <?php require '../pagination.php'; ?>
  </div>
<?php require '../views/footer.php'; ?>