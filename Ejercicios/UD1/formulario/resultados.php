<!DOCTYPE html>
<html>
<head>
	<title>Datos Procesados</title>
</head>
<body>
<?php 

 ?>

	 <div class="datos">
	 	<?php 
	 		echo "<b>Nombre: </b>". $_GET['nombre'].'<br />';
	 		echo "<b>Apellidos: </b>". $_GET['apellidos'].'<br />';
	 		echo "<b>e-mail: </b>". $_GET['email'].'<br />';
	 		echo "<b>Domicilio: </b>". $_GET['domicilio'].'<br />'.'<br />'.'<br />';
	 		
	 		
	 		echo "<b>Intereses de ". $_GET['nombre']. ": </b>".'<br />' ;
	 		if (isset ($_GET['musica'])) {echo "Música ".'<br />';}
	 		if (isset ($_GET['libros'])) {echo "Libros ".'<br />';}
	 		if (isset ($_GET['deportes'])) {echo "Deportes ".'<br />';}
	 		if (isset ($_GET['cine'])) {echo "Cine "."<br />";}

	 		echo "<br />"."<br />";

	 		echo "<b>El sexo de ".$_GET['nombre']." es: </b>".'<br />';
	 		if ($_GET['sexo'] == "Mujer") {
	 			echo "mujer";
	 		} else {
	 			echo "Hombre";
	 		}
	 		echo "<br />"."<br />"."<br />";

	 		echo "<b>Día que quiere recibir la entrega:</b>"."<br />";
	 		echo $_GET['dia'];
	 		echo "<br />"."<br />"."<br />";


	 		echo "<b>Sugerencias: </b><br />".$_GET['box'];
	 		
	 	 ?>



	 	<!--<p><b>NOMBRE: </b><?php echo $_GET['nombre']; ?></p>
	 	<p><b>APELLIDOS: </b><?php echo $_GET['apellidos']; ?></p>
	 	<p><b>E-MAIL: </b><?php echo $_GET['email']; ?></p>
	 	<p><b>DOMICILIO: </b><?php echo $_GET['domicilio']; ?></p>-->

	 </div>

	 <div class="intereses">
	 	
	 </div>
</body>
</html>
