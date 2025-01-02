<?php

/*$amigo = array('telefono' => 0424, 'edad' => 20, 'pais' => 'mexico');

extract($amigo);
 
echo $edad;*/

$semana = array( 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes',
        'Sabado', 'Domingo');

/* foreach ($semana as $dia) {
    echo $dia;
} *//* 
echo count($semana);// muestra el numero de arreglos */
//array_pop($semana); extrae el ultimo elemento de un arreglo
/* sort(); */ //funcion para ordenar alfabeticamente, rsort(); hace lo contrario
$semReverse = array_reverse($semana);//revierte el orden de los valores
echo join('  ' ,  $semReverse);// funcion muy util para mostrar arreglos


?>