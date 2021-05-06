<html>
<head>
  <title>Diagnosta</title>
  <link rel='stylesheet' type='text/css' href='diagnosta.css'>
</head>

<body>
  <header>
    <h1>Diagnosta</h1>
  </header>
  <main>
    <h2>PREGUNTA</h2>
    <?php
    //Conectamos con la base de datos
    require 'conexion.php';
    $nodo = $_GET['n'];
    $respuesta = $_GET['r'];
    $nombre = $_GET['nom'];
    /*
    echo "Nodo: " .$nodo;
    echo "<br>";
    echo "Respuesta: " .$respuesta;
    */
    function formularioRespuesta($n, $p, $nom){
      echo "<div class='contenedorPregunta'>";
      echo "<textarea id='nodo' name='nodo' form='formulario', style='display:none';>". $n. "</textarea>";
      echo "<textarea id='nombreAnt' name='nombreAnt' form='formulario', style='display:none';>". $nom. "</textarea>";

      echo "<h2>¿Qué realmente tenías?</h2>";
      echo "<textarea id='nombre' name='nombre' form='formulario' placeholder='Nombre'></textarea>";
      echo "<h3>¿Qué sintoma tenias que no fue preguntado?".$nom."</h3>";
      echo "<textarea id='caracteristicas' name='caracteristicas' form='formulario' placeholder='Caracteristicas'></textarea>";
      //Esto es para que te mande a otra página

      echo "<form action='crear.php' id='formulario' method='POST'>";
      echo "<button type='submit' name='enviar'>ENVIAR</button>";
      echo "</form>";
      echo "</div>";
    }
    formularioRespuesta($nodo, $respuesta, $nombre);
    ?>
  </main>

  </body>
  </html>
