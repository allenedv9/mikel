<!DOCTYPE html>
<html>
<head>
	<title>Ejer2</title>
</head>
<body>
	<h2>Elimina una carpeta</h2>
	<form method="GET" action="">
		<input type="submit" name="eliminar" value="Eliminar">	
	</form>

	<?php 
		$directorio = "1";
		function borrar($directorio){
			foreach (glob($directorio."/*") as $value) {
				if (is_dir($value)) {
					borrar($value);
				}else{
					unlink($value);
				}
			}
			rmdir($directorio);
		}
		borrar($directorio);


	 ?>


</body>
</html>