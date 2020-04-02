<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Dar de Alta un Libro</title>
</head>
<body>
	<form action='<?php print RUTA_APP."tablas/borrar/"; ?>' method="POST">
		<table>
			<tr>
				<td><label for="code">Codigo</label></td>
				<td><input type="text" name="code" value='<?php print $data["item_code"] ?>' disabled="disabled"></td>
			</tr>
			<tr>
				<td><label for="nombre">Nombre</label></td>
				<td><input type="text" name="nombre" value='<?php print $data["item_name"] ?>' disabled="disabled"></td>
			</tr>
			<tr>
				<td><label for="imagen">Imagen</label></td>
				<td><input type="text" name="imagen" value='<?php print $data["item_picture"] ?>' disabled="disabled"></td>
			</tr>
			<tr>
				<td><label for="presentacion">Presentacion</label></td>
				<td><input type="text" name="presentacion" value='<?php print $data["presentation_id"] ?>' disabled="disabled"></td>
			</tr>
			<tr>
				<td><label for="contenido">Contenido</label></td>
				<td><input type="text" name="contenido" value='<?php print $data["item_content"] ?>' disabled="disabled"></td>
			</tr>
			<tr>
				<td><label for="marca">Marca</label></td>
				<td><input type="text" name="marca" value='<?php print $data["brand_id"] ?>' disabled="disabled"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="item_id" value='<?php print $data["item_id"]; ?>'></td>
				<td>&nbsp;</td>
				<td><input type="submit" value="Borrar"></td>
			</tr>
		</table>
		<p>ADVERTENCIA una vez borrado el libro NO podras recuperarlo</p>
	</form>
	<a href='<?php print RUTA_APP."tablas/"; ?>'></a>
</body>
</html>