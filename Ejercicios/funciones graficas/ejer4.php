<?php
$imagen=imageCreate(200,50);
$amarillo=ImageColorAllocate($imagen,255,255,0); 
ImageFill($imagen,0,0,$amarillo); 

$verde=ImageColorAllocate($imagen,0,255,0);
$valoraleatorio= rand(0,getrandmax());                      //genera números aleatorios
ImageString($imagen,5,50,20,$valoraleatorio,$verde); //tamaño de la fuente máx.5 y coordenadas c y f

header ("content-type: image/jpeg"); 
imageJPEG ($imagen); 
imageDestroy($imagen); 

bool imageline ( resource $image , int $x1 , int $y1 , int $x2 , int $y2 , int $color );
                      
?>
