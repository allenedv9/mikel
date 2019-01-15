<?php 
	header('Content.type: text/html; charset=UTF-8');

	if (!isset($_SERVER['PHP_AUTH_USER'])) {
		header('www-authenticate: basic realm="contenido restringido"');
		header('HTTP/1.0 401 Unautorized');
		echo "Has pulsado cancelar";
		exit;
	}

	else{
	$conexion = mysqli_connect("localhost","root","","dwes") or die('¡ERROE! No se ha podido conectar a la base de datos');

	$user = $_SERVER['PHP_AUTH_USER'];
	$pass = md5($_SERVER['PHP_AUTH_PW']);

	$q = <<<abc
		Select * from usuarios where usuario = '$user' && password = '$pass';

abc;
		$registro = mysqli_query($conexion,$q);

		if (mysqli_affected_rows($conexion) == 0) {
			echo "No existe el usuario";
			mysqli_close($conexion);
		}else{
			echo "ENTRANDO...";
			mysqli_close($conexion);
		}

		

	}




 ?>