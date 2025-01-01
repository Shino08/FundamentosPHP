<?php

/* $edad = (isset($edad)) ? : ; */
#isset sirve para saber si una variable tiene un valor o no

$edad = (isset($edad)) ? $edad : "EL usuario no establecio su edad" ; //Una forma mas corta de escribir IF ELSE

if (isset($edad)) {
  $edad = $edad;
} else {
  $edad = "EL usuario no establecio su edad";
}

echo "Edad: ". $edad;

?>