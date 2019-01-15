<?php 
	//array no asociativo

	$capitales = array('Madrid','París','Londres');

	//•	Matriz vista por echo. Para esta opción utilizar foreach().

	echo "<b>Matriz vista por echo</b><br>";
	foreach ($capitales as $indice => $value) {
		echo $indice. "=>" .$value. "<br>";
	}


	echo "<br>";
	echo "<b>Matriz vista por print_r</b><br>";

	print_r($capitales);


	echo "<br>";
	echo "<br>";
	echo "<b>Matriz vista por print_r y la etiqueta pre.</b><br>";

	echo "<PRE>";
    print_r($capitales);
    echo "</PRE>";


    echo "<br>";
	echo "<b>Matriz vista por la función:  var_dump()</b><br>";

	var_dump($capitales);


	echo "<br>";
	echo "<b>Dada la siguiente función, realizar la llamada correspondiente. Esta función debe estar en una página diferente a la llamada.</b><br>";

	require_once "ejer1_funcion.php";
	depurar_array($capitales);





 ?>