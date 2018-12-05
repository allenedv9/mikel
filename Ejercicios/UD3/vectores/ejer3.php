<!DOCTYPE html>
<html>
<head>
	<title>vectores pizarra</title>
</head>
<body>
	<?php 

		$n[0] = 0;
		$n[1] = 10;
		$n[2] = 20;
		$n[3] = 30;
		$n[5] = 50;
		$n[4][0][0] = 400;
		$n[4][0][1] = 401;
		$n[4][1][0] = 410;
		$n[4][1][1] = 411;
		$n[4][2][0] = 420;
		$n[4][2][1] = 421;


		foreach ($n as $key => $value) {
			
		}

		if (is_array($n[3])) {
			echo "la posicion 4 es un array";
		}else{
			echo "no es un array";
		}




	 ?>

</body>
</html>