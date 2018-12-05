<!--Inicializar 3 variables, si todas son iguales visualizar la suma del primero con el segundo
y a este resultado se le multiplica por el tercero-->


<!DOCTYPE html>
<html>
<head>
	<title>ejer2</title>
</head>
<body>
	<?php 
		$n1 = 2;
		$n2 = 2;
		$n3 = 2;

		if ($n1==$n2 && $n1==$n3) {
			echo ($n1+$n2)*$n3;
		}else{
			echo "Los tres números deben ser iguales";
		}


	 ?>

</body>
</html>
