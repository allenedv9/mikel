<!--Mostramos los números de los días del 1 a la fecha actual.
Para obtener el día de la fecha del servidor : date(“d”);
-->
<!DOCTYPE html>
<html>
<head>
	<title>Ejer4</title>
</head>
<body>
	<?php 
		$dia = date("d");
		$cont = 1;

		while ($cont <= $dia) {
			echo $cont . ", ";
			$cont++;
		}



	 ?>

</body>
</html>