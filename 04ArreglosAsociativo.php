<?php

$alex = array('telefono' => '0424','edad' => '45','apellido' => 'vasquez','pais' => 'mexico');

/* echo $alex['telefono'] . '<br />';
echo $alex['edad'] . '<br />';
echo $alex['apellido'] . '<br />';
echo $alex['pais'] . '<br />'; */

#para sobre escribir arrays

$alex ['edad'] = 50;
echo 'la edad de alex es: '. $alex['edad'];

?>