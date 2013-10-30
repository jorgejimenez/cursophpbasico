<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <title>XadrijoLab 07</title>
</head>

<body>

<div>
<h2>Datos de Usuario.</h2>

<form action="procesa.php" method="POST">

	<p>Nombre: <input type="text" name="nombre" size="25"></p>
	<p>
		<select name="sexo">
			<option value="mujer">Mujer</option>
			<option value="hombre">Hombre</option>
		</select>
	</p>
	<p>Email: <input name="email" type="text" size="25"></p>

	<p>
		<input type="radio" name="deporte" value="Futbol">Fultbol
		<input type="radio" name="deporte" value="Beisbol">Beisbol
		<input type="radio" name="deporte" value="Basketball">Basketball
	</p>

	<p>
		Comentarios: <textarea name="comments" rows="5" cols="35"></textarea>
	</p>

	<input type="submit" name="Enviar" value="Enviar">


</form>

</div>

</body>
</html>
