<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		if (!$_GET) {
			echo <<<conversor
			<form method="get">
				<h3>Convertir euros a pesetas</h3>
				<input type="number" name="num" step ="any">

				<h3>Elija la opción</h3>
				 <select name="opc">
			 		<option value="euros">Euros a pesetas</option>
			 		<option value="pesetas">Pesetas a euros</option>
			 	</select>
				<input type="submit" name="enviar">
			</form>
conversor;
		}else{
			f1();
		}

			function f1(){
				$num = $_GET['num'];
				$opc = $_GET['opc'];
				if($opc == 'euros'){
					echo ($num*166.386);
				}else{
					echo ($num/166.386);
				}
			}

	 ?>


</body>
</html>