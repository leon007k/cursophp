<?php

# se agrega una condicion por si no existe la cookie, tenga un valor por defecto 
if (isset($_COOKIE['font-size'])){
    $size = $_COOKIE['font-size'];
}else{
    $size = '15px';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Text</title>
  <style type="text/css">
    p {
      font-size: <?php echo $size; ?>;
    }
  </style>
</head>
<body>
  <p>
  Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente laudantium officiis quo, reiciendis architecto perspiciatis hic eveniet nesciunt reprehenderit voluptatibus! Tempora nihil non sit nam aliquam recusandae ea amet ratione?
  Esse, vitae veniam porro culpa sed eos quaerat, quis distinctio nihil amet velit eveniet molestiae! Quo, voluptatum expedita? Quos perspiciatis aliquam eius molestiae dolorum a veniam, veritatis non porro aut!
</p>
</body>
</html>