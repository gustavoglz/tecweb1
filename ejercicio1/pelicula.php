<?php
$conexion = mysql_connect('localhost', 'root', 'root');
$base_datos = mysql_select_db('tecweb1', $conexion);
$query = mysql_query("SELECT * from peliculas WHERE id=" . $_GET["id"], $conexion);


?>
<!DOCTYPE html>
<html>
<head>
	<?php include "head.php"; ?>
</head>
<body>
	<?php include "menu.php"; ?>
	
	<?php while($reglon = mysql_fetch_array($query)){
		
		echo "<h2>" . $reglon["titulo"] . "</h2>";
		echo "<p>" . $reglon["fecha_estreno"] . "</p>";
		echo "<p>" . $reglon["sinopsis"] . "</p>";
		
		
	} ?>
</body>
</html>