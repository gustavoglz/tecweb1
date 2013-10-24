<?php
$conexion = mysql_connect('localhost', 'root', 'root');
$base_datos = mysql_select_db('tecweb1', $conexion);
mysql_query("DELETE FROM peliculas WHERE id= '" . $_GET["id"] . "'", $conexion);
?>