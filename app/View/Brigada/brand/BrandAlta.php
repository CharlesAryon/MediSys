<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Dar de Alta un Medicamento</title>
</head>
<body>
	<form action='<?php print RUTA_APP."tablas/alta/"; ?>' method="POST">
		<table>
			<tr>
				<td><label for="code">Codigo</label></td>
				<td><input type="number" name="code"></td>
			</tr>
			<tr>
				<td><label for="nombre">Nombre</label></td>
				<td><input type="text" name="nombre"></td>
			</tr>
			<tr>
				<td><label for="imagen">Imagen</label></td>
				<td><input type="text" name="imagen"></td>
			</tr>
			<tr>
				<td><label for="presentacion">Presentacion</label></td>
				<td><input type="number" name="presentacion"></td>
			</tr>
			<tr>
				<td><label for="contenido">Contenido</label></td>
				<td><input type="text" name="contenido"></td>
			</tr>
			<tr>
				<td><label for="marca">Marca</label></td>
				<td><input type="number" name="marca"></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td><input type="submit" value="Guardar"></td>
			</tr>
		</table>
	</form>
</body>
</html>