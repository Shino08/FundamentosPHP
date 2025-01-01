<?php
/* 
$alex = array('telefono' => '0424','edad' => '45','apellido' => 'vasquez','pais' => 'mexico');

extract($alex);

echo $telefono; */

$semana = array('lunes','martes','miercoles','jueves','viernes','sabado','domingo');
/* 
$ultimoDia = array_pop($semana);  //Extrae el ultimo elemento de un array
foreach ($semana as $dia) {
  echo $dia . '<br />';
}
 */
/* echo $ultimoDia; */

/* echo join('_' , $semana); */

/* sort($semana); //Ordena alfabeticamente
echo join('-' , $semana); */
/* 
rsort($semana); //orden descendente
echo join('-' , $semana); */

$semanaReverse = array_reverse($semana);//Revierte el orden de un array
echo join('-' , $semanaReverse);

?>