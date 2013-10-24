<?php
$conexion = mysql_connect('localhost', 'root', 'root');
$base_datos = mysql_select_db('tecweb1', $conexion);

$t = $_POST['titulo'];
$s = $_POST['sinopsis'];
$f = $_POST['fecha_estreno'];
$g = $_POST['id_genero'];

mysql_query("INSERT INTO peliculas (titulo,sinopsis,fecha_estreno,id_genero) VALUES ('". $t ."','". $s ."',". $f .",". $g .")", $conexion);

?>