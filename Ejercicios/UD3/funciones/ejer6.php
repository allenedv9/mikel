<!DOCTYPE html>
<html>
<head>
	<title>ejer6</title>
</head>
<body>
	<?php 
		if(!$_GET){
		echo <<<conversor 
		<h3>Convertir euros a pesetas</h3>
		<form method="get">
			<input type="number" name="euros" step ="any">
			<h3>Elija la opción</h3>
			 <select>
		 		<option>Euros a pesetas</option>
		 		<option>Pesetas a euros</option>
		 	</select>
			<input type="submit" name="enviar">
		</form>
conversor;
		}else{
		$euros = $_GET['euros']
		function conversor(){
			
		}
	}

	 ?>


</body>
</html>