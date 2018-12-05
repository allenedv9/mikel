<!DOCTYPE html>
<html>
<head>
	<title>ejer2</title>
	<meta charset="utf-8">
</head>
<body>
	<?php 
		$ar = fopen("archivo01.txt", "r") or die("Holi, está tó mal pringaü");
		$leer = fread($ar, filesize("archivo01.txt"));
		echo utf8_encode($leer);
		fclose($ar);


	 ?>

</body>
</html>