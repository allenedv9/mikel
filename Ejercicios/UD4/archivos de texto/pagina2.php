<!DOCTYPE html>
<html>
<head>
	<title>pagina2</title>
</head>
<body>
	<?php
		$ar=fopen("datos.txt","w") or die("Problemas en la creacion");
		fwrite($ar,$_POST['nombre'].PHP_EOL);
		fwrite($ar,$_POST['telefono'].PHP_EOL);
		fwrite($ar,"--------------------------------------------------------");
		fclose($ar);
		echo "Los datos se guardaron correctamente.";
	?>


</body>
</html>