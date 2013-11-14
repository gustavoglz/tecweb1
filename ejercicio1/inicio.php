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
	
	<table border="1" width="900">
		<tr>
			<td>Poster</td>
			<td>Título</td>
			<td>Sinopsis</td>
			<td>Fecha de Estreno</td>
			<td>Ver</td>
			<td>Editar</td>
			<td>Eliminar</td>
		</tr>
		
		<?php
		while($reglon = mysql_fetch_array($query)){
			echo "<tr>";
			echo "<td><img width='50' src='posters/" . $reglon["poster"] . "' /></td>";
			echo "<td>" . $reglon["titulo"] . "</td>";
			echo "<td>" . $reglon["sinopsis"] . "</td>";
			echo "<td>" . $reglon["fecha_estreno"] . "</td>";
			echo "<td><a href='pelicula.php?id=" . $reglon["id"] . "'>Ver</a></td>";
			echo "<td>Editar</td>";
			echo "<td><a href='borrar.php?id=". $reglon['id'] . "' >eliminar</a></td>";
		
			echo "</tr>";
		}
	
		?>
		
		
		
	</table>
	
	
	
</body>
</html>

















































































































































































