<!Doctype html>
<html>
<head><title>Prueba</title></head>
<body>
	<?php
	$var="Ceinmark";
	?>

	<h1>Ámbito de las variables en PHP</h1>
	<?php
	echo $var;

	function PruebaLocal()
{ 
     static $var=1; 
     echo "Prueba local. \$var  :". ++$var . "<BR>";  
} 

PruebaLocal(); 
PruebaLocal(); 
PruebaLocal(); 


$var=`dir`; //apóstrofo invertido (donde está el [^)
echo "<pre>$var</pre>"; 



	?>
</body>
</html>
