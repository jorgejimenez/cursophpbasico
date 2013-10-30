<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <title>XadrijoLab 07</title>
</head>

<body>

<div>

<?php # VideoTutorial 07

	//print_r($_POST);

	$nombre = $_POST['nombre'];
	$sexo = $_POST['sexo'];
	$deporte = $_POST['deporte'];
	$comentario = $_POST['comments'];


	echo "El nombre del usuario es: $nombre<br />";
	echo "Su sexo es $sexo<br />";
	echo "Su deporte favorito es: $deporte<br />";
	echo "Comentario: $comentario";



?>
</div>

</body>
</html>
