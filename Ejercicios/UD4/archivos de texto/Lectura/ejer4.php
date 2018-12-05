<!DOCTYPE html>
<html>
<head>
	<title>ejer4</title>

</head>
<body>
	<?php 
		$ar = @fopen("archivo01.txt", "r");
		print_r(file("archivo01.txt"));
		fclose($ar);
	 ?>

</body>
</html>