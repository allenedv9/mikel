<!DOCTYPE html>
<html>
<head>
	<title>Repaso</title>
</head>
<body>
	<?php
		$num = array(1,2,3,4);
		$n1[0] = 5;
		$n1[1] = 6; 
		$n1[2] = 7;
		$n2 = ['uno'=>8, 'dos'=>9, 'tres'=>10];

/*array de provincias*/

	$provincias = ['nombre'=>'alava', 'habitantes'=>30000, 'nombre2'=>'bizkaia', 'habitantes2'=>130000];
	$provincias2 = array('nombre'=>'bizkaia', 'habitantes2'=>130000);
	$provincias3['nombre'] = 'gipuzkoa';
	$provincias3['habitantes'] = 400000;

	foreach ($provincias as $key => $value) {
		echo $key. " " . $value. " " . "<br/>";
		
	}






	 ?>

</body>
</html>