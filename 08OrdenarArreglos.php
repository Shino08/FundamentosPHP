<?php

//$meses = array('enero','febrero','marzo','abril','mayo','junio','julio','agosto','septiembre','octubre','noviembre','diciembre');

#funcion para ordenar alfabeticamente o ascendente y descendente
//sort($meses);

$numeros = array (1, 22, 45, 55, 70, 89, 99, 100);

#funcione inversa de (sort)
rsort($numeros);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Meses dek año</title>
</head>
<body>
  <h1>Meses del año
    <ul>
      <?php

        foreach($numeros as $numero){
            echo '<li>'.$numero.'</li>' ;
        }

      ?>
    </ul>
  </h1>
</body>
</html>