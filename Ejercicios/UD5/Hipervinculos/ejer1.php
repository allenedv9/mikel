<?php 
	if (isset($_REQUEST['cont'])) {
		$cont = $_REQUEST['cont'];
	
	}else{
		$cont = 0;
	}

	$conexion = mysqli_connect("localhost","root","","trenes") or die("¡ERROR!");

	$q = <<<abc
		Select * from recorridos limit $cont, 2;

abc;

		$registro = mysqli_query($conexion,$q) or die("¡ERROR! en la query");
		while ($reg = mysqli_fetch_array($registro)) {
			echo <<<def
				<p>
					Tren:{$reg['tren']}<br>
					Estacion:{$reg['estacion']}
					<hr>
				</p>
def;
		}

		$q2 = mysqli_query($conexion,"Select * from recorridos");
		$filas = mysqli_num_rows($q2);

		mysqli_close($conexion);

		if ($cont == 0) {
			echo "Anterior";
			$x = $cont + 2;
			echo '<a href="ejer1.php?cont='.$x.'">Siguiente</a>';
		}else{
			$y = $cont -2;
			echo '<a href="ejer1.php?cont='.$y.'">Anterior</a>';

			if ($cont < $filas-2) {
				$x = $cont + 2;
				echo '<a href="ejer1.php?cont='.$x.'">Siguiente</a>';
			}else{
				echo "Siguiente";
			}
		}




 ?>
