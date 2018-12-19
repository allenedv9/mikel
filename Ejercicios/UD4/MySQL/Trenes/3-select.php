<?php 
	$conexion = mysqli_connect("localhost","root","","trenes");
	$q = mysqli_query($conexion, "select cod_tren, fecha_compra from trenes") or die("Problemas con la select: ".mysqli_error());

	while ($reg = mysqli_fetch_array($q)) {
		echo "Número de tren: ".$reg["cod_tren"]."<br>";
		echo "Fecha de la compra: ".$reg["fecha_compra"]."<br>";
		echo "<hr>";
	}
	mysqli_close($conexion);

 ?>