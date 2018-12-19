<!DOCTYPE html>
<html>
<head>
	<title>Trenes formulario</title>
</head>
<body>
	<form method="get" action="insert.php">
		<h4><b>Datos sobre los trenes</b></h4>
		<label>Inserta la fecha de compra: </label>
		<input type="date" name="fecha">
		<br>
		<label>Inserta los kilometros recorridos:</label>
		<input type="number" name="km"><br><br>
		<input type="submit" name="registrar1" value="Registrar datos">
	</form>
		<p>------------------------------------------------------------------------------------------</p>
	<form method="get" action="insert.php">
		<h4><b>Datos sobre las estaciones</b></h4>
		<label>Inserta el nombre de la estación: </label>
		<input type="text" name="nombre">
		<br>
		<label>Inserta la población:</label>
		<input type="text" name="poblacion"><br><br>
		<input type="submit" name="registrar2" value="Registrar datos">
	</form>
		<p>------------------------------------------------------------------------------------------</p>
	<form method="get" action="insert.php">
		<h4><b>Datos sobre los recorridos</b></h4>
		<label>Inserta el codigo del tren: </label>
		<input type="number" name="tren">
		<br>
		<label>Inserta la estación:</label>
		<input type="number" name="estacion"><br><br>
		<input type="submit" name="registrar3" value="Registrar datos">
	</form>

</body>
</html>