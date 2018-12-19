<?php 
	$conexion = mysqli_connect("localhost","root","","trenes");
	if (isset($_GET['registrar1'])) {
		mysqli_query($conexion,"insert into trenes(fecha_compra,km_recorridos) value ('$_GET[fecha]','$_GET[km]')") or die("Problemas al insertar el tren");
		echo "Datos introducidos correctamente";
	}

	if (isset($_GET['registrar2'])) {
		mysqli_query($conexion, "insert into estaciones(nombre,poblacion) value('$_GET[nombre]','$_GET[poblacion]')") or die("Problemas al insertar la estación");
		echo "Datos introducidos correctamente";
	}

	if (isset($_GET['registrar3'])) {
		mysqli_query($conexion, "insert into recorridos(tren,estacion) value ('$_GET[tren]','$_GET[estacion]')") or die("Problemas al insertar el recorridos");
		echo "Datos introducidos correctamente";
	}

	echo '<br><input type="submit" value="volver" onclick="history.go(-1)">';
	mysqli_close($conexion);

 ?>