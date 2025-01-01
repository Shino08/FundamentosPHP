<?php

$meses = array('enero','febrero','marzo','abril','mayo','junio','julio','agosto','septiembre','octubre','noviembre','diciembre');

$alex = array('telefono' => '0424','edad' => '45','apellido' => 'vasquez','pais' => 'mexico');

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Meses</h1>
  <ul>
    <?php
/*       foreach ($meses as $mes) {
          echo '<li>' . $mes . '</li>'; 
      }
 */
      foreach ($alex as $key => $value) {
        //echo '<li>' . $value . '</li>';
        echo '<li>' . $key . ' : ' . $value . '</li>';
      }

    ?>
  </ul>
</body>
</html>