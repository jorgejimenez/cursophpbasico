<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <title>XadrijoLab 05</title>
</head>



<body>
	<?php # Ejemplo 03
	$string1 = "mi \"string\"...";
	$string2 = "Otro string";

	$primer_nombre = "Jorge Luis";
	$apellido = "Jimenez";
	$total = $primer_nombre ." ". $apellido;
	$libro = "La Quinta Disciplina";
	$autor = "Peter Senge";
	$favorito = $libro ." - ". $autor;

	//echo $string1;
	//echo "Hola $primer_nombre";
	//echo "Hola $total";

	echo "<p>Su nombre es <b>$total</b><br />
			y su libro favorito es <em>$favorito</em></p>";

	?>


</body>
