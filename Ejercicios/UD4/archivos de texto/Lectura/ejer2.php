<!DOCTYPE html>
<html>
<head>
	<title>ejer2</title>
	<meta charset="utf-8">
</head>
<body>
	<?php 
		$ar = fopen("archivo01.txt", "r") or die("Error");
		while (!feof($ar)) {
			$leer = fgets($ar);
			echo utf8_encode($leer)."<br>";
		}
		
		fclose($ar);





	 ?>



</body>
</html>