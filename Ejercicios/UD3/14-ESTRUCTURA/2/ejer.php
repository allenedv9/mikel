<!DOCTYPE html>
<html>
<head>
	<title>Estructura 2</title>
</head>
<body>
	<h2>Crear y eliminar carpetas</h2>
	<form method="post">
		<label>Introduce el numero de carpetas que quieres crear</label>
		<input type="number" name="num">
		<input type="submit" name="crear" value="Crear">
		<input type="submit" name="eliminar" value="Eliminar">
	</form>

	<?php 
		if (!$_POST) {
		}else{
				$x = $_POST['num'];
				$y = 0;

			if (isset($_POST['crear'])) {
				while ($y <= $x) {
					mkdir('allende'.$y);
					$y++;	
				}
				
			}
			if (isset($_POST['eliminar'])) {
				while ($y <= $x) {
					rmdir('allende'.$y);
					$y++;
				}
			}
			}
		



	 ?>


</body>
</html>