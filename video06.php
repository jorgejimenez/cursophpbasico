<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <title>XadrijoLab 06</title>
</head>

<body>

	<?php # Video 06
	
	$cantidad = 25;
	$precio = 305.45;
	//$iva = 0.12;
	define('IVA', 0.12);

	$total = $cantidad * $precio;
	//$total = $total + ($total * IVA);
	$total += ($total * IVA);

	$total = number_format($total, 3);
	//echo $total;

	echo "<p>usted compro $cantidad items</p><br />";
	echo "El costo por unidad es de $precio<br />";
	echo "El total de la venta es de $total";
	
	/*
	$num1 = 5;
	$num2 = 4;

	echo $num1 + $num2 . "<br />";
	echo $num1 - $num2 . "<br />";
	echo $num1 * $num2 . "<br />";
	echo $num1 / $num2 . "<br />";
	echo $num1 % $num2 . "<br />";


	define('PI', 3.14);

	//echo "El valor de la constante PI: PI";
	echo "El valor de la constante PI " . PI . "<br />";
	echo PHP_VERSION;*/

	?>
        

</body>
</html>
