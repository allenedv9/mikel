<!DOCTYPE html>
<html>
<head>
	<title>Ejer4</title>
</head>
<body>
	<?php 
	if (!$_GET) {

		echo <<<txt
		<h3>Introduce un número, para calcular su exponente y su cubo</h3>
		<form method="get">
			<input type="number" name="num">
			<input type="submit" name="calcular">
			
		</form>
txt;

	}else{
		f1();
	}
		function f1(){
			$num = $_GET['num'];
			echo $num." ber 2 = ".pow($num, 2)."<br>";
			echo $num." ber 3 = ".pow($num, 3);
		}
	 ?>


</body>
</html>