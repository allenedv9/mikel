<!DOCTYPE html>
<html>
<head>
	<title>ejer6</title>
</head>
<body>
	<?php
		print "<B>Visualizar los pedidos desde el 10 hasta el 13  de forma directa </B><BR /><BR />";
		$arch = "archivo.txt";
		$da = @fopen($arch, "r")   or die ("No existe el archivo");
		$inicio=(10-1)*31;//cada registro ocupa 29 caracteres + 2 del ENTER= 31.                                                                                                                       //(numeroFila-1)*31
		while($inicio<((14-1)*31)){
		fseek($da,$inicio,SEEK_SET); 
		$linea=fgets($da);
		echo $linea."<br />";
		$inicio=$inicio+31;
		}

		fclose($da);
?>


</body>
</html>