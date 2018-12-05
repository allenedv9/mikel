<!--realizar el ejercicio con if y elseif
Inicializar una nota con un numero entero
si la nota es >=5 y <6 visualizar aprobado, si la nota está entre 6 y <7 visualizar bien,
 entre 7 y <8 notable y mayor o igual a 8 sobresaliente.--> 

<!DOCTYPE html>
<html>
<head>
	<title>Nota</title>
</head>
<body>
	<?php 
		$nota = 9;

		if ($nota>=5 && $nota<6) {
			echo "<b>Aprobado</b>";
		}elseif($nota>=6 && $nota<7){
			echo "<b>Bien</b>";
		}elseif($nota>=7 && $nota<8){
			echo "<b>Notable</b>";
		}elseif($nota>=8){
			echo "<b>Sobresaliente</b>";
		}


	 ?>

</body>
</html>