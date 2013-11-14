<?php
$conexion = mysql_connect('localhost', 'root', 'root');
$base_datos = mysql_select_db('tecweb1', $conexion);
$directores = mysql_query('SELECT * from directores', $conexion);
$generos = mysql_query('SELECT * from generos', $conexion);
?>

<!DOCTYPE html>
<html>
<head>
	<?php include "head.php"; ?>
</head>
<body>
	<?php include "menu.php"; ?>
	<h1>Crear Pelicula</h1>
	
	<form action="insertar.php" method="POST" enctype="multipart/form-data">
		<p>Titulo</p>
		<input type="text" name="titulo" value="" id="titulo">
	
		<p>Sinopsis</p>
		<textarea rows="4" cols="50" name="sinopsis" id="sinopsis"></textarea>
		
		<p>fecha de estreno</p>
		<input type="text" name="fecha_estreno" id="fecha_estreno">
		
		<p>Poster</p>
		<input type="file" name="image" id="image">
		
		<p>Director</p>
		<select name="id_director" id="id_director">
			<?php
			while($reglon = mysql_fetch_array($directores)){
				echo "<option value ='" . $reglon["id"] . "'>" . $reglon["nombre"] . "</option>";
			}
			?>
		</select>
		
		<p>Género</p>
		<select name="id_genero" id="id_genero">
			<?php
			while($reglon2 = mysql_fetch_array($generos)){
				echo "<option value ='" . $reglon2["id"] . "'>" . $reglon2["nombre"] . "</option>";
			}
			?>
		</select>
	
		
		<p><input type="submit" value="Insertar"></p>
	</form>
	
	
</body>
</html>