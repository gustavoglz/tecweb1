<?php
$titulo = "Ejercicio 1";
$pelicula = 3;
$conexion = mysql_connect('localhost', 'root', 'root');
$base_datos = mysql_select_db('tecweb1', $conexion);
$query = mysql_query('SELECT * from peliculas', $conexion);
?>
<!DOCTYPE html>
<html>
<head>
	<?php include "head.php"; ?>
</head>
<body>
	<?php include "menu.php"; ?>
	<h1>Peliculas</h1>
	
	<form action="insertar.php" method="POST">
		<input type="text" name="titulo" value="" id="titulo">
	
		<p><input type="submit" value="Pasar variable"></p>
	</form>
	
	<?php
	while($reglon = mysql_fetch_array($query)){
		
		$query2  = mysql_query("SELECT directores.id, directores.nombre
		FROM directores INNER JOIN peliculas_directores
		ON peliculas_directores.id_director=directores.id
		WHERE peliculas_directores.id_pelicula='" . $reglon["id"] . "'" , $conexion);
		
		echo "<h2>" . $reglon["titulo"] . "</h2>";
		
		echo "<a href='pelicula.php?id=" . $reglon["id"] . "'>Ver</a>";
		
		while($reglon2 = mysql_fetch_array($query2)){
			echo "<p>" . $reglon2["nombre"] . "</p>";
		}
		
		$query3  = mysql_query("SELECT generos.id, generos.nombre
		FROM generos INNER JOIN peliculas_generos
		ON peliculas_generos.id_genero=generos.id
		WHERE peliculas_generos.id_pelicula='" . $reglon["id"] . "'" , $conexion);
		
		while($reglon3 = mysql_fetch_array($query3)){
			echo "<p class='generos_style'>" . $reglon3["nombre"] . "</p>";
		}
		
		echo "<p>" . $reglon["fecha_estreno"] . "</p>";
		echo "<p>" . $reglon["sinopsis"] . "</p>";
		
		echo "<a href='borrar.php?id=". $reglon['id'] . "' >eliminar</a>";
		
		
	}
	
	?>
	
</body>
</html>

















































































































































































