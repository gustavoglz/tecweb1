<?php
$titulo = "Generos";

$conexion = mysql_connect('localhost', 'root', 'root');
$base_datos = mysql_select_db('tecweb1', $conexion);
$query = mysql_query('SELECT * from generos', $conexion);
?>
<!DOCTYPE html>
<html>
<head>
	<?php include "head.php"; ?>
</head>
<body>
	<?php include "menu.php"; ?>
	<h1><?php echo $titulo; ?></h1>
	<?php
	while($reglon = mysql_fetch_array($query)){
		echo "<h2>" . $reglon["nombre"] . "</h2>";
			
	}
	 ?>
</body>
</html>


