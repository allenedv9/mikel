<!DOCTYPE html>
<html>
<head>
	<title>Lectura de ficheros</title>
	<meta charset="utf-8">
</head>
<body>
	<?php 

		$archivo = fopen("archivo01.txt", "r") or die("No se puede abrir el archivo");
		$info = file("archivo01.txt");

		foreach ($info as $indice => $valor) {
			//echo $valor;
			echo utf8_encode($valor);
			echo "</br>";

		}

		fclose($archivo);











	 ?>

</body>
</html>