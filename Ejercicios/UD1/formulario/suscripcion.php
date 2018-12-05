<!DOCTYPE html>
<html>
<head>
	<title>Ssuscripción Electrónica</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
	<?php 
		if (! $_GET) {

	
echo<<<formulario
				
		<h1>Suscripción Electrónica</h1>

		<div class="formulario">
			<form action="resultados.php" method="get">
				<div class="datos">
					<label>Nombre: </label>
					<input type="text" name="nombre" class="input_uno">
					<label>Apellidos: </label>
					<input type="text" name="apellidos" class="input_uno">
					<label>e-mail: </label>
					<input type="email" name="email" class="input_uno">
					<br>
					<br>
					<div class="div_domicilio">
					<label>Domicilio: </label>
						<input type="text" name="domicilio" class="input_domicilio">
					</div>
				</div>

				<div class="parte_dos">
					<div class="intereses">
						<label>Interesado en los siguientes temas:</label>
						<div class="opciones_intereses">
							<input type="checkbox" name="musica">
							<label>Música</label>
							<br>
							<input type="checkbox" name="libros">
							<label>Libros</label>
							<br>
							<input type="checkbox" name="deportes">
							<label>Deportes</label>
							<br>
							<input type="checkbox" name="cine">
							<label>Cine</label>
						</div>
					</div>

					<div class="sexo">
						<label>Sexo</label>
						<div class="opciones_sexo">
							<br>
							<input type="radio" name="sexo" value="mujer">
							<label>Mujer</label>
							<br>
							<input type="radio" name="sexo" value="hombre">
							<label>Hombre</label>
						</div>
						
					</div>
				</div>

				<div class="fecha">
					<label>Día de la semana que le interesa recibirlo</label>
					<br>
					<select name="dia">
						<option selected="">día de la semana</option>
						<option value="lunes">Lunes</option>
						<option value="martes">Martes</option>
						<option value="miercoles">Miercoles</option>
						<option value="jueves">Jueves</option>
						<option value="viernes">Viernes</option>
						<option value="sabado">Sábado</option>
						<option value="domingo">Domingo</option>
					</select>
				</div>

				<div class="opinion">
					<label>Su opinión:</label>
					<br>
					<textarea name="box"></textarea>
				</div>

				<div class="envio">
					<input type="submit" name="" value="Enviar datos">
					<input type="reset" name="" value="Borrar todo" class="borrar">
				</div>
			</form>
		</div>

formulario;
	 
		} else {
		
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
		}
	 ?>

</body>
</html>