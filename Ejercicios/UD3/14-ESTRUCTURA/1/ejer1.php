<!DOCTYPE html>
<html>
<head>
	<title>Estructura 1</title>
</head>
<body>
	<h2>Crea o elimina una carpeta</h2>
	<form method="GET" action="">
		<input type="submit" name="crear" value="Crear">
		<input type="submit" name="eliminar" value="Eliminar">	
	</form>
	<?php 
		if (isset($_GET['crear'])) {
			mkdir('carpeta1');
			echo "Se ha creado la carpeta";
		}
		if (isset($_GET['eliminar'])) {
			rmdir('carpeta1');
			echo "Se ha eliminado la carpeta";
		}

	 ?>

</body>
</html>