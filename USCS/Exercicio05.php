<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<h1> Mostrar valores e o produto entere eles </h1>
    <?php
    
    $Valor = 5;
    $Produto = 1;
    $Mult = $Valor * $Valor;
    for ($i= 0 ;$i <= $Mult; $i++)
    {
       if ($i == 0){
       Echo "$i";}
       else{
      Echo ", $i";
    }
    }
     ?>

</body>
</html>