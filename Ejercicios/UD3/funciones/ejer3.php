<!DOCTYPE html>
<html>
<head>
	<title>Ejer2</title>
</head>
<body>
	<?php
	if (!$_GET) {
		echo <<<txt
		<form method="get">
			<h3>Introduce dos números</h3>
			<input type="number" name="num1">
			<input type="number" name="num2">
			<input type="submit" name="recoger" value="comprobar">
		</form>
	
txt;
	}else{
		mayor();
	}

		function mayor(){
			$num1 = $_GET['num1'];
			$num2 = $_GET['num2'];

			if ($num1 < $num2) {
				echo $num2." es mayor que ".$num1;
			}else if ($num1 > $num2) {
				echo $num1." es mayor que ".$num2;
			}else{
				echo $num1." es igual que ".$num2;
			}
		}



	 ?>

</body>
</html>