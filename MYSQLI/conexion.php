<?php

$conection = new mysqli('localhost','root','','prueba_consola');

if ($conection-> connect_errno) {
  die('Lo siento hubo un problema con el servidor');
}