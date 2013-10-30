<!DOCTYPE html>
<html>
	<head>
		<title>XadrijoLab 10</title>
		<meta charset="UTF-8">
	</head>
	<body>
	
	<form action="procesar.php" method="POST">
		<p><label for="nombre">Nombre</label><input type="text" name="nombre" size="20"></p>
		<p><label for="edad">Edad</label>
			<select name="edad">
				<option value="">--Seleccione edad--</option>
				<option value="1">10 a 19 años</option>
				<option value="2">20 a 29 años</option>
				<option value="3">30 a 39 años</option>
			</select>
		</p>
		<p>
		<input type="radio" name="sexo" value="hombre" checked="checked">Hombre
		<input type="radio" name="sexo" value="mujer">Mujer
		</p>

		<p><input type="submit" value="Enviar"></p>
	</form>

	</body>
</html>
