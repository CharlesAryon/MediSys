<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Lista de Marcas</title>
</head>
<body>
	<a href='<?php print RUTA_APP."tablas/alta/"; ?>'>Nombres</a>
	<table border="1">
		<thead>
			<th>Codigo</th>
			<th>Nombre</th>
			<th>Imagen</th>
			<th>Presentacion</th>
			<th>Contenido</th>
			<th>Marca ID</th>
			<th>Modificar</th>
			<th>Eliminar</th>
		</thead>
		<tbody>
			<?php
				for ($i=0; $i < count($data); $i++)
				{ 
					print "<tr>";
					print "<td>".$data[$i]["item_code"]."</td>";
					print "<td>".$data[$i]["item_name"]."</td>";
					print "<td>".$data[$i]["item_picture"]."</td>";
					print "<td>".$data[$i]["presentation_id"]."</td>";
					print "<td>".$data[$i]["item_content"]."</td>";
					print "<td>".$data[$i]["brand_id"]."</td>";
					print "<td><button><a href='".RUTA_APP."tablas/modificar/".$data[$i]["item_id"]."'>Modificar</a></button></td>";
					print "<td align='center'><button><a href='".RUTA_APP."tablas/borrar/".$data[$i]["item_id"]."'>Borrar</a></button></td>";
					
					print "</tr>";
				}
			?>
		</tbody>
	</table>
	<br>
	<button><a href='<?php print RUTA_APP."tablas/alta/"; ?>'>Alta</a></button>
	<br>
</body>
</html>