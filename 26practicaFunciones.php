<?php

function calcularArea($num1 , $num2){
        $area = $num1 * $num2 / 2;
        return $area;
}

$areaTriangulo = calcularArea(10 , 10);

echo 'El triangulo tiene un area de: ' . $areaTriangulo . ' metros cuadrados ';

?>