<?php 
	header('Content-Type: text/html; charset=UTF-8');

	if (!isset($_SERVER['PHP_AUTH_USER'])) {	
		header('WWW-Authenticate: Basic Realm="Contenido restringido"');
		header('HTTP/1.0 401 Unauthorized');
		echo "Has pulsado CANCELAR";
		exit;
	}
		
	else { 
		if ($_SERVER['PHP_AUTH_USER'] == 'dwes' && $_SERVER['PHP_AUTH_PW'] == 'abc123.') {
			echo "ENTRANDO...";
		}else{
			echo "<p>Usuario o contraseña incorrecta</p>";

		} 
	} 

 ?>