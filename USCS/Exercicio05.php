<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1> Mostrar valores e o produto entere eles </h1>
    <?php
    $Valor = 5;
    $Produto = 1;
    for ($i= 0 ;$i <= $Valor; $i++){

    if ($i == 0){
    Echo "$i";}
    else{
    Echo ", $i";}

    if ($i>0)
    $Produto = $Produto * $i;
    }
    Echo "<br><br> Produto de todos os valores: $Produto";

    ?>

  </body>
</html>
