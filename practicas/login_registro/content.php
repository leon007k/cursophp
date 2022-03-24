<?php
session_start();
if(isset($_SESSION['user'])){
  require('views/content_view.php');
}else{
  header('Location: login.php');
}

?>