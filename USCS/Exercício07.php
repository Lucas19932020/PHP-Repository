<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1> Tamanho de Chico e Juca </h1>
<?php
    $Ano=1;
    do{
      $Chico=1.5+0.02*$Ano;
      $Juca=1.1+0.03*$Ano;
      $Ano++;
    }while($Juca<$Chico);
    echo $Chico . " ";
    echo $Juca. " ";
    Echo "São necessários $Ano para que Juca seja maior que Chico";
  ?>

  </body>
</html>
