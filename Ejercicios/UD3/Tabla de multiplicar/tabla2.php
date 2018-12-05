<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio</title>
</head>
<body>
	<?php 
		$num = $_GET['num'];
		$cont = 1;

		echo "<form method='get' action='tabla3.php'>";
			while ($cont <= 10) {
				echo $num." x ".$cont. " = ";
				$cont++;
				echo "<input type='number' name='$cont'><br>";
			}
		echo "<input type='submit' name='comprobar' value='Comprobar'>";
		echo "<input type='hidden' name='numero' value='".$num."'>";
		echo "</form>";
	 ?>

</body>
</html>