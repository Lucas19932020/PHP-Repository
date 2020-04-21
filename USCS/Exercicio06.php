<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1> Soma e Quantidade </h1>
    <?php
    $Entrada = 1;
    $Ci = 0;
    $Somap = 0;
    for ($i=$Entrada;$i<=($Entrada+430);$i++){
      if ($i >= 0)
      $Somap = $Somap + $i;
      else
      $Ci++;
    }
    Echo "Soma dos números positivos: $Somap";
    Echo "<br>Quantidade de Numeros negativos: $Ci";
    ?>

  </body>
</html>
