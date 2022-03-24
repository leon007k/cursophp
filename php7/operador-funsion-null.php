<?php

//$nombre = isset($_GET['nombre']) ? $_GET['nombre'] : 'Anonimo';

// Nueva forma de agregar una condicion para php 7
$nombre = $_GET['nombre'] ?? 'Anonimo';

echo $nombre;
