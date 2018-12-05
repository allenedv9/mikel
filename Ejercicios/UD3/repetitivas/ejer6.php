<!--Obtener la tabla del 2 con do…while : 2-4-6-8-10-12-14-16-18-20--->

<!DOCTYPE html>
<html>
<head>
	<title>Ejer6</title>
</head>
<body>

	<?php 
		$num = 2;
		$cont = 1;

		do {
			$multi = $cont * $num;
			echo $multi. " ,";
			$cont++;
		} while ($multi < 20);



	 ?>

</body>
</html>