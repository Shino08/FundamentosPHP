<?php
/* 
declare(strict_types=1); */

function cuadrado(int $num){
    return $num * $num;
}

$num = '2';
echo 'El cuadrado del numero ' . $num . ' es: ' . cuadrado($num);


?>