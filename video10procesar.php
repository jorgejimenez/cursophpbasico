<!DOCTYPE html>
<html>
	<head>
		<title>Procesar Cliente</title>
		<meta charset="UTF-8">	
		<style type="text/css">
			.errors{color: red;}
		</style>
	</head>
	<body>
	
	<?php	
	$nombre = $_POST['nombre'];	
	$edad = $_POST['edad'];
	$sexo = $_POST['sexo'];

	if ($edad == 1){
		if ($sexo == 'hombre')
			echo "Hola sr. $nombre, su edad esta entre 10 y 19 años";
		else
			echo "Hola sra. $nombre, su edad esta entre 10 y 19 años";
	}
	elseif ($edad == 2) {
		if ($sexo == 'hombre')
			echo "Hola sr. $nombre, su edad esta entre 20 y 29 años";
		else
			echo "Hola sra. $nombre, su edad esta entre 20 y 29 años";
	}
	elseif ($edad == 3){
		if ($sexo == 'hombre')
			echo "Hola sr. $nombre, su edad esta entre 30 y 39 años";
		else
			echo "Hola sra. $nombre, su edad esta entre 30 y 39 años";
	}
	else {
		echo "<p class='errors'>Usted no ha ingresado su edad</p>";
	}

	?>

	</body>
</html>
