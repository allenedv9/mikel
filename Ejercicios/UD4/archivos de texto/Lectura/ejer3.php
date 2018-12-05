<!DOCTYPE html>
<html>
<head>
	<title>ejer3</title>
	<meta charset="utf-8">
</head>
<body>
	<?php 
		$ar = fopen("archivo01.txt", "r") or die("Error");
		$cont = 0;
		while (!feof($ar)) {
			$lectura = fgetc($ar);
			$cont++;
		}
		
		fclose($ar);
		echo "Contó ".$cont." caracteres";

	 ?>



</body>
</html>