<?php
$conexion = mysql_connect('localhost', 'root', 'root');
$base_datos = mysql_select_db('tecweb1', $conexion);

$t = $_POST['titulo'];
$s = $_POST['sinopsis'];
$f = $_POST['fecha_estreno'];
$id_director = $_POST['id_director'];
$id_genero = $_POST['id_genero'];

$name = $_FILES["image"]["name"];
$type = $_FILES["image"]["type"];
$size = $_FILES["image"]["size"];
$temp = $_FILES["image"]["tmp_name"];
$error = $_FILES["image"]["error"];
$permitidos = array('image/pjpeg', 'image/jpeg', 'image/JPEG', 'image/JPG','image/X-PNG','image/PNG','image/png','image/x-png');



if ($name != '') {
	$nombrecompuesto = date('His')."-".$name;
	
if ($error > 0)
	die ("Error");
else	
{
	if(in_array($_FILES['image']['type'], $permitidos))
	{
		move_uploaded_file($temp,"posters/".$nombrecompuesto);
	}
	else
	{
		die ("El formato no es permitido y ARRIBA EL AMERICA!!!");
	}
}

}

mysql_query("INSERT INTO peliculas (titulo,sinopsis,fecha_estreno,poster,id_director,id_genero) VALUES ('". $t ."','". $s ."','". $f ."','". $nombrecompuesto ."','". $id_director ."','". $id_genero ."')", $conexion);
header('Location:inicio.php');
?>





