<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <h1> Calculo Fatorial </h1>
    <?php
    $Entrada = 0;
    $Fatorial = 1;
    Echo "$Entrada! = ";
    if($Entrada == 0){
    Echo "$Fatorial";
    }
    else while($Entrada>0){
        if($Entrada>0)
        {
        $Fatorial=$Fatorial*$Entrada;
        if($Entrada > 1)
        Echo "$Entrada * ";
        else if ($Entrada == 1)
        Echo "$Entrada";}
        $Entrada--;
        }
    Echo "<br><br> Valor do Fatorial = $Fatorial";

    ?>
</body>
</html>
