<?php require '../views/header.php';  ?>
  <div class="container adjust-content-page" id="contentBlog">
      <div class="row pt-4 pb-4">
        <h2 class="title bold mb-3">Publica tu nuevo articulo</h2>
          <div class="col-12 col-md-8 offset-md-2 pt-3 pb-3 shadow mb-4 rounded">
            <form enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
              <div class="input-group mb-3">
                <input class="form-control" type="text" name="title" placeholder="Titulo del articulo">
              </div>
              <div class="input-group mb-3">
                <input class="form-control" type="text" name="resume" placeholder="Extracto del articulo">
              </div>
              <div class="input-group mb-3">
                <textarea  class="form-control" name="text" placeholder="Contenido del articulo" cols="30" rows="10"></textarea>
              </div>
              <div class="input-group mb-3">
                <input type="file" class="form-control" name="thumb">
              </div>
              <input class="btn btn-primary" type="submit" name="submit" value="Publicar">
            </form>
          </div>
      </div>
    </div>
<?php require '../views/footer.php'?>