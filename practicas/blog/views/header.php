<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0, minimum-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
  <script src="https://code.iconify.design/2/2.1.2/iconify.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo ROUTE; ?>css/style.css">
  <title>Blog del programdor</title>
</head>
<body>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
    <div class="container">
      <a class="navbar-brand" href="<?php echo ROUTE; ?>">BlogPrograming</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <form action="<?php echo ROUTE;?>/search.php" method="get" name="search" class="input-group mt-4 mt-md-0">
        <input class="form-control" name="search" type="search" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-outline-info" type="submit"><span class="iconify" data-icon="ant-design:search-outlined"></span></button>
      </form>
      <ul class="navbar-nav ms-md-4 mt-2 mt-md-0 social-media">
        <li class="nav-item d-flex align-items-center">
          <span class="text-invite text-white d-none d-sm-block">Contactame: </span>
          <a class="nav-link me-2 me-md-0" href="https://www.linkedin.com/in/leonardo-andrade-l%C3%B3pez-152739206/"><span class="iconify" data-icon="akar-icons:linkedin-box-fill"></span></a>
          <a class="nav-link me-2 me-md-0" href="https://github.com/leon007k"><span class="iconify" data-icon="akar-icons:github-fill"></span></a>
          <a class="nav-link" href="emailto:leodark17@hotmail.com"><span class="iconify" data-icon="dashicons:email-alt"></span></a>
        </li>
      </ul>
    </div>
    </div>
  </nav>