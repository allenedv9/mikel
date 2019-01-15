<?php 
	$conexion = mysqli_connect("localhost","root","","dwes") or die("¡ERROR! No se puede conectar a la base de datos");

	$q = <<<abc
		Insert into usuarios values ('dwes',md5('abc123.'));

abc;

	$registro = mysqli_query($conexion,$q);
	mysqli_close($conexion);
 ?>