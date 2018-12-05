<!--Obtener la tabla del 2 con for : 2-4-6-8-10-12-14-16-18-20-
Colocar al principio del programa la fecha del servidor; con la función date(“d|m|Y”);-->
<!DOCTYPE html>
<html>
<head>
	<title>ejer9</title>
</head>
<body>
	<?php 
		echo date("d-m-y")."<br><br>";
		$num = 2;
		$multi = 0;

		for ($x=1; $multi < 20; $x++) { 
			$multi = ($num*$x);
			echo $multi.", ";
		}




	 ?>

</body>
</html>
