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
      echo "<h2>De acuerdo a tus respuestas posiblemente tengas: ".$nom."</h2>";
      echo "<h3>Te recomendamos ir con tu médico de preferencia lo más pronto posible</h3>";

      //Esto es para que te mande a otra página

    }
    formularioRespuesta($nodo, $respuesta, $nombre);
    ?>
  </main>

  </body>
  </html>
