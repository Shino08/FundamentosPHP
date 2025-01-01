<?php
/* 
if(condicion){
//instruccion
} */

$edad =19;
$nombre = 'Freddy';

#Operadores logicos
//&& - Evalua que se cumplan las dos condiciones
//OR - Evalua que se cumplan al menos una condicion
//XOR - Evalua que se cumpla una y solo una condicion

if($edad > 18 or $nombre == 'Freddy'){
      echo '<h1> BIENVENIDO </h1>';
}
/* 
if($edad <= 18){
      echo '<h1> Eres menor de edad </h1>';

} */

?>