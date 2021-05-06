<?php
/*
$mysql_host = "localhost";
$mysql_usuario = "root";
$mysql_passwd = "rootpass";
$mysql_bd = "diagnosta";
*/
$mysql_host = "localhost";
$mysql_usuario = "root";
$mysql_passwd = "";
$mysql_bd = "diagnosta";
/*
Esto es para conectar la base de datos
le pasamos los valores de host, usuario, y password
*/
$enlace = mysqli_connect($mysql_host, $mysql_usuario, $mysql_passwd, $mysql_bd);

/*
Esto es para comprobar la conexión
*/
if(mysqli_connect_errno()){
  printf("Fallo de conexión %s\n", mysqli_connect_errno());
  exit();
}

/*
Para que se van con la codificación de caracteres adecuadas UTF-8
*/
mysqli_set_charset($enlace, 'utf8');

?>
