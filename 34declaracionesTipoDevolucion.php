<?php
#si queremos hacer del codigo estricto colocar la siguiente funcion
/* 
declare(strict_types=1); */

function obtenerEdad() : int{
    $edad = '10';
    return $edad;
}

echo obtenerEdad();

?>