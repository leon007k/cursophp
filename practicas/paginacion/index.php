<?php


  # Realizamos la conexion a la bd y comenzamos a llenar la tabla articule mediante un arreglo 
  try {
    $connection = new PDO('mysql:host=localhost;dbname=pagination','root','');
    //echo('conexion realizada con exito <br>');
   /*  //$easy = $connection->prepare("INSERT INTO pagination.articule (Id,Articule) VALUES(?,?)");
    //$easy->bindParam('ss',$Id,$text); 
    $content = array('Ut quis duis adipisicing sunt ad officia dolor fugiat aliqua id.',
                  'Ut ex sunt nulla nisi voluptate.',
                'Irure adipisicing ad laborum cillum id culpa cupidatat mollit ea.',
              'Adipisicing elit non exercitation ad adipisicing aliquip duis.',
              'Nostrud exercitation velit veniam velit mollit laborum quis nostrud Lorem.',
            'Sunt fugiat nulla fugiat sit aute nisi duis.',
            'Enim sit ea amet velit ullamco ex.',
            'Voluptate est laborum dolor adipisicing amet labore adipisicing est ullamco dolor qui.',
          'Consectetur eiusmod amet exercitation nostrud aliqua elit mollit laboris ad magna reprehenderit labore consectetur ad.',
        'Veniam ullamco duis tempor amet elit aliquip labore non.',
        'Ut quis duis adipisicing sunt ad officia dolor fugiat aliqua id.',
                  'Ut ex sunt nulla nisi voluptate.',
                'Irure adipisicing ad laborum cillum id culpa cupidatat mollit ea.',
              'Adipisicing elit non exercitation ad adipisicing aliquip duis.',
              'Nostrud exercitation velit veniam velit mollit laborum quis nostrud Lorem.',
            'Sunt fugiat nulla fugiat sit aute nisi duis.',
            'Enim sit ea amet velit ullamco ex.',
            'Voluptate est laborum dolor adipisicing amet labore adipisicing est ullamco dolor qui.',
          'Consectetur eiusmod amet exercitation nostrud aliqua elit mollit laboris ad magna reprehenderit labore consectetur ad.',
        'Veniam ullamco duis tempor amet elit aliquip labore non.');
    // llenamos la bd con los datos obtenidos del arreglo
    foreach($content as $lorem){
      $easy = $connection->query('INSERT INTO pagination.articule (Articule) VALUES("'. $lorem .'")');
    } */
/* $easy->execute(); */
  
  }catch(PDOException $e){
    echo 'algo salio mal' . $e->getMessage(); 
    die();
  }

$page = isset($_GET['page']) ? (int)$_GET['page'] : 1; //# sirve para indicar en que pagina estamos
$postForPage = 10; //# sirve para mostrar la cantidad de articulos por pagina

//# sirve para indicar el comienzo de los articulos a mostrar
$content = ($page > 1) ? ($page * $postForPage - $postForPage) : 0;

//# Mediante el LIMIT indicamos donde queremos que comience lo que mostrara y le indicamos la cantidad a mostrar
$content_query = $connection->prepare("SELECT * FROM articule
                                      LIMIT $content, $postForPage");

$content_query->execute();
$content_query = $content_query->fetchAll(); //@ para que nos muestre todo
//print_r($content_query); 
//# Redireccionamos al usuario, en caso de que no exista el num de pagina ingresada
if(!$content_query){
  header("Location:index.php");
}

//# sirve para obtener el total de nuestro contenido a extraer
$totalarticule = $connection->query("SELECT count(*) as total from articule");
$totalarticule = $totalarticule->fetch()['total']; 

//# sirve para obtener el total de paginas
$totalpage = ceil($totalarticule / $postForPage);

//echo '<p class="bg-primary text-white">pagina ' . $page . ' de ' . $totalpage . ' paginas ('. $totalarticule .' Articulos)' .'</p>';

  require_once 'index_view.php';