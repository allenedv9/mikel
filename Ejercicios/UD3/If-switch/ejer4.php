<!--Realizar el ejercicio con switch
Declarar 3 variables: $opcion, $n1,$n2
Si opción contiene una s, visualizar la suma de $n1 más $n2.
Si opción contiene una r, visualizar la resta de $n1 menos $n2.
Si  opción contiene una m, visualizar el producto de  $n1 por $n2,
Si  opción contiene una d,  visualizar el cociente de $n1 entre $n2,
Si opción no contiene ninguno de los valores anteriores, visualizar un mensaje de error.
--> 


<!DOCTYPE html>
<html>
<head>
	<title>ejer4</title>
</head>
<body>

	<?php 
		$opcion = 'm';
		$n1 = 4;
		$n2 = 6;

		switch ($opcion) {
			case 's':
				echo $n1+$n2;
				break;
			case 'r':
				echo $n1-$n2;
				break;
			case 'm':
				echo $n1*$n2;
				break;
			case 'd':
				echo $n1/$n2;
				break;
			case '';
				echo "La variable opción no contiene nada";
				break;

		}



	 ?>

</body>
</html>