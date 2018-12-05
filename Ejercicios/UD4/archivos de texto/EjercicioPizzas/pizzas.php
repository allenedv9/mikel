<!DOCTYPE html>
<html>
<head>
	<title>EjercicoPizzas</title>
	<style type="text/css">
		.lejos{
			margin-left: 11px;
		}
		.numero{
			width: 30px;
		}

		.boton{
			margin-left: 120px;

		form{
			width: 40%;
		}
		
	</style>
</head>
<body>
	<h2>¡Haz tú pedido!</h2>
	<form method="get" action="pizzas2.php">
		<label>Nombre: </label>
		<input type="text" name="nombre" class="lejos">
		<br>

		<label>Dirección: </label>
		<input type="text" name="direccion">
		<br>
		<br>


		<label>Jamon y queso</label>
		<input type="checkbox" name="jyq">
		<br>

		<label>Cantidad</label>
		<input type="number" name="cant_jyq" class="numero">
		<br>
		<br>

		<label>Napolitana:</label>
		<input type="checkbox" name="nap">
		<br>

		<label>Cantidad</label>
		<input type="number" name="cant_nap" class="numero">
		<br>
		<br>

		<label>Muzzarella:</label>
		<input type="checkbox" name="muz">
		<br>

		<label>Cantidad</label>
		<input type="number" name="cant_muz" class="numero">
		<br>
		<br>

		<input type="submit" name="enviar" value="¡Haz tu pedido!" class="boton">

	</form>



</body>
</html>