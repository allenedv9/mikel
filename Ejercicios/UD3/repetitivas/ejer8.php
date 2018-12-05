<!-- Simular un reloj digital-->

<!DOCTYPE html>
<html>
<head>
	<title>ejer8</title>
</head>
<body>
	<?php 

		for ($h=0; $h < 2; $h++) { 
			for ($m=0; $m < 60 ; $m++) {
				for ($s=0; $s < 60; $s++) { 
					echo $h.":".$m.":".$s."<br>";
				}
			}
		}



	 ?>

</body>
</html>