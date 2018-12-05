<!DOCTYPE html>
<html>
<head>
	<title>ejer3</title>
</head>
<body>
	<?php 
		echo "<p>Multiplos del 4 de 100 a 400</p><br>";
		$num = 4;
		$multiplo = 25;
		
		while ($multiplo <= 99) {
			echo $num*$multiplo . " - ";
			$multiplo++;
		}
		echo $num*$multiplo;

	 ?>

</body>
</html>