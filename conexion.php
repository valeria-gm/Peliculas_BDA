<?php
$host = 'localhost';
$usuario = 'supremo';
$password = 'abc123muydificl';
$bd = 'pelianalitic';

$conexion = mysqli_connect($host, $usuario, $password);

// Check connection
if (!$conexion) {
    die("Connection failed: " . mysqli_connect_error());
  }
  //echo "Connected successfully";
  //echo '<pre>';
  //print_r($conexion);
  //echo '</pre>';

$bd_conectada = mysqli_select_db($conexion, $bd);
echo $bd_conectada;

$sql = 'SELECT * FROM pelianalitic.pelicula'; #cadena de texto
$rsql = mysqli_query($conexion, $sql); #operacion
//print_r($rsql)

// cambiar formato para usar
$pelis = mysqli_fetch_all($rsql, MYSQLI_ASSOC);
//print_r($songs);


?>
