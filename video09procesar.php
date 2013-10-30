<!DOCTYPE html>
<html>
<head>
	<title>Procesar Datos </title>
	<style type="text/css">
		.error {color:red;}
	</style>
</head>
<body>

	<?php
	$nombre = $_POST['nombre'];
	$edad = $_POST['edad'];

	if (is_numeric($edad))
	{
		$acceder = FALSE;

		if ($edad >= 18)
		{
			echo "Hola $nombre, usted es mayor de edad<br>";
			$acceder = TRUE;
		}
		else
		{
			echo "Hola $nombre, usted es menor de edad<br>";
		}
	}
	else 
	{
		echo "<p class='error'>El valor de la edad no es un numero...</p>";
	}

	if ($acceder) 
	{
		echo "Usted tiene acceso a la pagina";
	}
	else 
	{
		echo "Usted NO tiene acceso a la pagina";
	}




	?>
</body>
</html>
