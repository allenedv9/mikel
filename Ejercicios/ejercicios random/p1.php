<html>
<head>
<title>Variables</title>
</head>
<body>
<?php
$nombre = "Miren"; //asignación por valor
$nombreBis=&$nombre; // asignación por referencia.
//La dirección de $nombre se asigna a $nombreBis
$sueldo = 2543.50; 
$edad = 35; 
$oficinaCentral = true; 
echo "Visualizaci&oacute;n de las variables:"; echo "<br />";
echo $nombre; echo "<br />"; //visualiza Miren
echo $nombreBis; echo "<br />"; //visualiza Miren
echo $sueldo;
echo "<br />";
echo $edad;
echo "<br />";
echo $oficinaCentral;
?>
</body>
</html>
