<?php


$meses = array('enero','febrero','marzo','abril','mayo','junio','julio','agosto','septiembre','octubre','noviembre','diciembre');
/* 
foreach ( $meses as $mes) {
      echo $mes . '<br />';

      if ($mes == 'marzo') {
        break;
      }
}
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
    foreach ($meses as $mes) {
      if ($mes == 'enero') {
        continue;
      } else if ($mes == 'febrero') {
        continue;
      }
      echo $mes . '<br />';
    }


  ?>
</body>
</html>