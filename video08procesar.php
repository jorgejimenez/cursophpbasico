<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <title>XadrijoLab 08</title>

	<style type="text/css">
		.error { color: red;}
	</style>

</head>

<body>

<?php

$registro = TRUE;

if (empty($_POST['usuario']))
{
	echo "<p class='error'>El campo usuario no puede estar vacio.</p>";
	$registro = FALSE;

}

if (empty($_POST['password']))
{
	echo "<p class='error'>El campo contraseña no puede estar vacio.</p>";
	$registro = FALSE;

}

if (empty($_POST['confirm']))
{
	echo "<p class='error'>Debe confirmar contraseña.</p>";
	$registro = FALSE;

}

if (empty($_POST['terminos']))
{
	echo "<p class='error'>Debe aceptar los tèrminos.</p>";
	$registro = FALSE;

}

if($registro)
{
	echo "Su registro ha sido completado";
}


?>


</body>
</html>
