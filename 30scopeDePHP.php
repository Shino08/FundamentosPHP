<?php

/* $num = 19;#variable global */

function mostrar_numero(){
    $num = 10;
    return $num;#variable local
}

echo    mostrar_numero();/* las funciones no pueden acceder a las variables que esten fuera 
de la funcion y desde fuera de una funcion tampoco podemos accder a las variables que hayan
sido creadas dentro de una funcion*/
 
?>

