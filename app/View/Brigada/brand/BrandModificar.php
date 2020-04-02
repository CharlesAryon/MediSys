<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Modificar un Medicamento</title>
</head>
<body>
	<?php var_dump($data) ?>
	<form action='<?php print RUTA_APP."tablas/modificar/"; ?>' method="POST">
		<table>
			<tr>
				<td><label for="code">Codigo</label></td>
				<td><input type="number" name="code" value='<?php print $data["item_code"] ?>'></td>
			</tr>
			<tr>
				<td><label for="nombre">Nombre</label></td>
				<td><input type="text" name="nombre" value='<?php print $data["item_name"] ?>'></td>
			</tr>
			<tr>
				<td><label for="imagen">Imagen</label></td>
				<td><input type="text" name="imagen" value='<?php print $data["item_picture"] ?>'></td>
			</tr>
			<tr>
				<td><label for="presentacion">Presentacion</label></td>
				<td><input type="number" name="presentacion" value='<?php print $data["presentation_id"] ?>'></td>
			</tr>
			<tr>
				<td><label for="contenido">Contenido</label></td>
				<td><input type="text" name="contenido" value='<?php print $data["item_content"] ?>'></td>
			</tr>
			<tr>
				<td><label for="marca">Marca</label></td>
				<td><input type="text" name="marca" value='<?php print $data["brand_id"] ?>'></td>
			</tr>
			<tr>
				<td><input type="hidden" name="item_id" value='<?php print $data["item_id"]; ?>'></td>
				<td>&nbsp;</td>
				<td><input type="submit" value="Modificar"></td>
			</tr>
		</table>
	</form>
	<a href='<?php print RUTA_APP."tablas/"; ?>'></a>
</body>
</html>