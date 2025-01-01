<?php

/* Operadores Aritmeticos

+ suma
- resta 
* multiplicacion
/ division 
% modulo

*/

$numero = 10;
$numero2 = 1;

$resultado = $numero * $numero2;
//echo $resultado;

/* Operadores de asignacion

=
+=
-=
*=
/=

*/
/* 
$num = 20;
$num2 = 5;
 */
/* $num = $num2 + 10; */

/* echo $num; */

/* Operadores de comparacion

==
=== (identico tanto en valor como tipo de dato)
!=, <>
!==
>
<
=<
>=

*/

/* $a = '10'; // String
$variable = 'true';
if($variable !== true){
        echo "Es identico";
} else {
  echo "es diferente";
} */

#Operadores logicos
//&& - Evalua que se cumplan las dos condiciones
//OR - Evalua que se cumplan al menos una condicion
//XOR - Evalua que se cumpla una y solo una condicion

/* Operadores de Incremento / Decremento

++$x
$x++
--$x
$x--

*/

$x = 10;
/* $x = $x + 5; */
/* 
echo ++$x;
echo "<br />";
echo --$x; */

/* Operadores de cadenas
.
.=

*/

$texto = "Cadena de texto";
$texto2 = " segunda cadena";

$texto3 = $texto . $texto2;
echo $texto3;

?>