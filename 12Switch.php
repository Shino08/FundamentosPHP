<?php

/* switch(){
  case '';
  // instruccion
  break

} */
/* 
$mes = "Diciembre";

switch($mes){
  case 'Diciembre';
    echo "Feliz Navidad";
  break;
  case "Enero";
  echo "Feliz año nuevo";
  break;

  default;
  echo "No hay celebracion";
  break;
} */

$mes = 'Febrero';

if ($mes == 'Diciembre') {
  echo "Feliz Navidad";
} elseif ($mes == 'Enero') {
  echo "Feliz año nuevo";
} else {
  echo "buen dia";
}
  

?>