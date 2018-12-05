<!DOCTYPE html>
<html>
<head>
	<title>ejer5</title>
</head>
<body>
	<?php 
	if (!$_GET){
	echo <<<hola
		<h3>Texto: </h3>
		<form method="get">
			<input type="text" name="text">
			<input type="submit" name="enviar">
		</form>
hola;
	}else{
		f1();
	}

	function f1($text){
		$text = $_GET['text'];
		$resul = str_replace(" ","-",$text);
		echo $resul;
	}


	 ?>

</body>
</html>