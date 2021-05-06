<?php
require 'conexion.php';
$nodo = $_POST['nodo'];
$nombre = $_POST['nombre'];
$nombreAnt = $_POST['nombreAnt'];
$caracteristicas = $_POST['caracteristicas'];
echo "Nodo: " . $nodo;
echo "<br>";
echo "Nombre: " . $nombre;
echo "<br>";
echo "Caracteristicas: " . $caracteristicas;
echo "<br>";

//NUEVOS NODOS
/*
echo "Nombre anterior: " . $nombreAnt;
*/
$numHijoI = $nodo  * 2;
$numHijoD = $nodo * 2 + 1;

//Textos
$nombreHijoI = $nombre;
$nombreHjoD = $nombreAnt;

//PREGUNTA

$pregunta = $caracteristicas;

//Guardar infromación en la base de datos
$consulta = "INSERT INTO arbol (nodo, texto, pregunta) VALUES('".$numHijoI."','".$nombreHijoI."', FALSE)";
/*
echo $consulta;
*/
mysqli_query($enlace, $consulta);

$consulta = "INSERT INTO arbol (nodo, texto, pregunta) VALUES('".$numHijoD."','".$nombreHijoD."', FALSE)";
mysqli_query($enlace, $consulta);

$consulta = "UPDATE arbol SET texto = '".$pregunta."', pregunta = TRUE WHERE nodo = '".$nodo."'";
mysqli_query($enlace, $consulta);

//Página de regreso
header("Location:index.php");

 ?>
