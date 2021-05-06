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
    <h2>Pregunta</h2>

    <?php
    //Conectamos con la base de datos
    require 'conexion.php';
    //Recogemos el número de nodo de la URL (PARÁMETRO)
    $nodo = 1; //Valor por defecto del nodo
    if(isset($_GET['n'])){
      $nodo = $_GET['n'];

    }
    //Calular los siguientes nodos
    $nodoSi= $nodo * 2;
    $nodoNo = $nodo * 2 + 1;

    /*echo "NODO ACTUAL: " .$nodo;*/
    /*
    echo 'Nodo: ' . $nodo;
    echo 'Nodo No' . $nodoNo;
    echo 'Nodo Si: ' . $nodoSi;
    */
    ?>

    <?php

      $consulta = "SELECT texto, pregunta FROM arbol WHERE nodo=". $nodo . ";";
      $texto = '';
      $pregunta = true;
      $resultado;
      if($resultado = mysqli_query($enlace, $consulta)){
        if($resultado->num_rows === 0){
          echo 'Error - el nodo no existe';
        }
        //Cuando recupera correctamente la información
        else {
          while($fila = mysqli_fetch_row($resultado)){
            $texto = $fila[0];
            $pregunta = $fila[1];
          }

          if($pregunta == FALSE){
            echo "<div class='contenedorPregunta'>";
            echo "<h2>¿Tienes ". $texto . "?</h2>";
            echo "</div>";

            //<!--Aqui son los botones de si y no -->
            echo "<div class='contenedorRespuestas'>";


            //Esto esta en php porque ocupamos variables php
            echo "<a class='boton' href='nodoSi.php?n=" . $nodo. "&r=1&nom=".$texto."'>Si</a>";
            //Para agregar una nueva respuesta
            //echo "<a class='boton' href='index.php?n=" . $nodo. "&r=0&nom=".$texto."'>NO</a>";
            echo "<a class='boton' href='respuesta.php?n=" . $nodo. "&r=0&nom=".$texto."'>NO</a>";
            echo "</div>";
          }
          else {
            /*echo "Texto: " .$texto;
            echo "<br>";
            echo "Pregunta: " .$pregunta;*/
            //<!--Aquí se hace la pregunta--->
            echo "<div class='contenedorPregunta'>";
            echo "<h2>¿Tienes ".$texto."?</h2>";
            echo "</div>";

            //<!--Aqui son los botones de si y no -->
            echo "<div class='contenedorRespuestas'>";


            //Esto esta en php porque ocupamos variables php
            echo "<a class='boton' href='index.php?n=" . $nodoSi. "'>Si</a>";
            echo "<a class='boton' href='index.php?n=" . $nodoNo. "'>NO</a>";
            echo "</div>";
          }

          }

      }

     ?>






  </main>
<!--Esto es una clase para que se haga un espacio-->
  <div class='limpiar'></div>

  <!--Saltos de línea-->
  <br>
  <br>

  <!--Pie de página-->
  <footer>
    <a href='index.php'>Volver a intentar</a>

  </footer>

</body>
</html>
