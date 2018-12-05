<!DOCTYPE html>
<html>
<head>
	<title>Ejer1</title>
</head>
<body>
	<form action="funciones1.php" method="get">
		<h1>Ejercicio 1</h1>

		<label>Teclea nombre de usuario: </label>
		<input type="password" name="">
		<br>
		<label>Teclea la contraseña: </label>
		<input type="password" name="pass1">
		<br>
		<label>Teclea la contraseña: </label>
		<input type="password" name="pass2">
		<br>
		<input type="submit" name="">
	</form>

	<?php 
		$var = $_GET['pass1'].val();
		$var2 = $_GET['pass2'].val();

	 	echo "Primer tipo de función";
	 	function verificarClaves1(){
	 		echo "Las contraseñas tecleadas son distintas";
	 		if ($_REQUEST['$var']!=$_REQUEST['$var2']) {
	 			echo "Las contraseñas tecleadas son distintas";
	 		} else {
	 			echo "Correcto";
	 		}
	 		verificarClaves1();
	 		echo "<br />";
	 		
	 	}

	 ?>

</body>
</html>