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
	
	<table border="1">
		<tr>
			<td>Título</td>
			<td>Sinopsis</td>
			<td>Fecha de Estreno</td>
			<td>Director</td>
			<td>Género</td>
			<td>Ver</td>
			<td>Editar</td>
			<td>Eliminar</td>
		</tr>
		
		<?php
		while($reglon = mysql_fetch_array($query)){
			echo "<tr>";
			$query2  = mysql_query("SELECT directores.id, directores.nombre
			FROM directores INNER JOIN peliculas_directores
			ON peliculas_directores.id_director=directores.id
			WHERE peliculas_directores.id_pelicula='" . $reglon["id"] . "'" , $conexion);
		
			echo "<td>" . $reglon["titulo"] . "</td>";
			echo "<td>" . $reglon["sinopsis"] . "</td>";
			echo "<td>" . $reglon["fecha_estreno"] . "</td>";
			
			echo "<td>";
			while($reglon2 = mysql_fetch_array($query2)){
				echo  $reglon2["nombre"] . " ";
			}
			echo "</td>";
			$query3  = mysql_query("SELECT generos.id, generos.nombre
			FROM generos INNER JOIN peliculas_generos
			ON peliculas_generos.id_genero=generos.id
			WHERE peliculas_generos.id_pelicula='" . $reglon["id"] . "'" , $conexion);
			
			echo "<td>";
			while($reglon3 = mysql_fetch_array($query3)){
				echo $reglon3["nombre"] . " ";
			}
			echo "</td>";
			
		
			echo "<td><a href='pelicula.php?id=" . $reglon["id"] . "'>Ver</a></td>";
			echo "<td>Editar</td>";
			echo "<td><a href='borrar.php?id=". $reglon['id'] . "' >eliminar</a></td>";
		
			echo "</tr>";
		}
	
		?>
		
		
		
	</table>
	
	
	
</body>
</html>

















































































































































































