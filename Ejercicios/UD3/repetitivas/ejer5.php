<!--Generar un valor aleatorio entre 1 y 100, visualizar desde 1 hasta el valor generado (de uno en uno).
Función para generar números aleatorios desde 1 hasta 100 : rand(1,100)
-->

<!DOCTYPE html>
<html>
<head>
	<title>Ejer5</title>
</head>
<body>
	<?php 
		$aleatorio = rand(1,101);
		$cont = 1;

		do {
			echo $cont. ", ";
			$cont++;
		} while ( $cont <= $aleatorio);




	 ?>

</body>
</html>