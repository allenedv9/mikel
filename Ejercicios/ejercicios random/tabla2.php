<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio</title>
</head>
<body>


	<?php 
		$num = $_GET['numero'];
		$cont = 1;

		echo "<form action='tabla3.php' method='get'>";
			while ($cont <= 10) {
				echo $num." x ".$cont." = <input type='text' name='$cont'><br />";
				$cont++;
			}
			echo "<input type='submit' name='enviar'>";
			echo "<input type='hidden' name='oculto'>";
		echo "</form>";
	 ?>


</body>
</html>