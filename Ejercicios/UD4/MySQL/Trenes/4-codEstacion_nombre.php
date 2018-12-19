<?php 
	$conexion = mysqli_connect("localhost","root","","trenes");
	$q = mysqli_query($conexion, "select cod_estacion,nombre from estaciones where poblacion='Bilbao'") or die("Error con la select".msqli_error());

	while ($reg = mysqli_fetch_array($q)) {
		echo "Codigo estación: ".$reg["cod_estacion"]."<br>";
		echo "Nombre de la estación: ".$reg["nombre"]."<br>";
		echo "<hr>";
	}
	mysqli_close($conexion);


 ?>