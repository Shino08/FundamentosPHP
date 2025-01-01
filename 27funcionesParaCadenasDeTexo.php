<?php

$texto = 'Hola';

#nos permite construir caracteres especiales en entidades HTML
/* echo htmlspecialchars($texto); */

/* echo trim($texto); nos permite eliminar los espacios en blanco */

/* echo strlen($texto); */ //calcula el tamño de un string incluyendo los espacios 

/* echo substr($texto , 0 , 2); */
/* 
echo strtoupper($texto);//convierte los string a mayusculas
echo strtolower($texto); *///convierte los string a minusculas

echo strpos($texto, 'a');//Muestra en que posicion se encuentra un caracter

?>