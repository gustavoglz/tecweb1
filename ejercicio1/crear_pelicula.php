<!DOCTYPE html>
<html>
<head>
	<?php include "head.php"; ?>
</head>
<body>
	<?php include "menu.php"; ?>
	<h1>Crear Pelicula</h1>
	
	<form action="insertar.php" method="POST">
		<p>Titulo</p>
		<input type="text" name="titulo" value="" id="titulo">
	
		<p>Sinopsis</p>
		<textarea rows="4" cols="50" name="sinopsis" id="sinopsis"></textarea>
		
		<p>fecha de estreno</p>
		<input type="text" name="fecha_estreno" id="fecha_estreno">
		
		<p>genero</p>
		<input type="text" name="id_genero" id="id_genero">
		
		<p><input type="submit" value="Insertar"></p>
	</form>
	
	
</body>
</html>