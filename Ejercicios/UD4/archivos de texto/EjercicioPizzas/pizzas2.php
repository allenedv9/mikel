<!DOCTYPE html>
<html>
<head>
	<title>ejer2.2</title>
</head>
<body>
	<?php 
		$date = date("d/m/Y");
		$time = date("h:m:s");
		$ar = fopen("pedido.txt", "a") or die("Error");
		fwrite($ar, $_GET["nombre"].PHP_EOL);
		fwrite($ar, $_GET["direccion"].PHP_EOL);

		if (isset($_GET["jyq"])) {
			fwrite($ar, 'Jamon y queso'.'---->'.$_GET['cant_jyq'].PHP_EOL);

		}
		if (isset($_GET["nap"])) {
			fwrite($ar, 'Napolitana'.'---->'.$_GET['cant_nap'].PHP_EOL);

		}
			if (isset($_GET["muz"])) {
			fwrite($ar, 'Muzzarella'.'---->'.$_GET['cant_muz'].PHP_EOL);

		}
		fwrite($ar, $time." ");
		fwrite($ar, $date.PHP_EOL);
		fwrite($ar, '-------------------------------'.PHP_EOL);



	 ?>

</body>
</html>
