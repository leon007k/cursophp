<?php require '../views/header.php';  ?>
  <div class="container adjust-content-page" id="contentBlog">
      <div class="row pt-4 pb-4">
        <h2 class="title bold mb-3">Editar articulo</h2>
          <div class="col-12 col-md-8 offset-md-2 pt-3 pb-3 shadow mb-4 rounded">
            <form enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
              <div class="input-group mb-3">
                <input type="hidden" value="<?php echo $post['id']?>" name="id">
                <input class="form-control" type="text" name="title" value="<?php echo $post['titulo']; ?>">
              </div>
              <div class="input-group mb-3">
                <input class="form-control" type="text" name="resume" value="<?php echo $post['extracto']; ?>">
              </div>
              <div class="input-group mb-3">
                <textarea  class="form-control" name="text" cols="30" rows="10"><?php echo $post['texto'];?></textarea>
              </div>
              <div class="input-group mb-3">
                <input type="file" class="form-control" name="thumb">
                <input type="hidden" name="thumb-save" value="<?php echo $post['thumb']?>">
              </div>
              <input class="btn btn-primary" type="submit" name="submit" value="Actualizar">
            </form>
          </div>
      </div>
    </div>
<?php require '../views/footer.php'?>