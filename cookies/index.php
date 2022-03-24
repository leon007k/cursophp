<?php
  # En este caso para quitar la cookie se le cambia la fecha a la cookie 
  # simplemente quitando el signo mas y se cambia por el signo menos
  setcookie('font-size','40px',time() + 60 * 60 * 24 * 30, '/');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cookies</title>
</head>
<body>
  <h1>Cookie Seteada</h1>
  <a href="text.php"> Ver texto</a>
</body>
</html>