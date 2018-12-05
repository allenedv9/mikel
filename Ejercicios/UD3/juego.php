<!DOCTYPE html>
<html>
<head>
	<title>Adivina la clave</title>
	<style>
		input {
			width: 30px;
			height: 20px;
		}

		.enviar{
			width: 80px;
			height: 25px;
		}
	</style>
</head>
<body>
	<div class="form">
		<form method="GET" action="<?php echo $_SERVER['PHP_SELF'];?>">
			<input type="number" name="n1" min="0" max="9" required>
			<input type="number" name="n2" min="0" max="9" required>
			<input type="number" name="n3" min="0" max="9" required>
			<input type="number" name="n4" min="0" max="9" required>
			<input type="submit" name="enviar" class="enviar">
		</form>
	</div>
	<?php 

		if(isset($_GET['enviar'])){
			function clave(){
				$valores = array();
				$cont = 0;

				while ($cont < 4){
					$aleatorio = mt_rand(0,5);
					if (!in_array($aleatorio, $valores)){
						array_push($valores, $aleatorio);
						$cont++;
					}
				}

				return $valores;
			}

			$num = clave();
			foreach ($num as $key => $value) {
				echo $value;
			}

		}
	 ?>

	<div class="resultado">
		<?php 
			if (isset($_GET['comprobar'])) {
				$n = array($_GET['n1'],$_GET['n2'],$_GET['n3'],$_GET['n4'],);
				echo "<div class='bloque'>";

				for ($x=0; $x <4 ; $x++) { 
					echo "<div";
				}
			}

		 ?>
	</div>
</body>
</html>