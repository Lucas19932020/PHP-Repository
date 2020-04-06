<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <h1> Verificação de Valores </h1>
    <?php
    $Valor=-30;
    if($Valor>0){
        echo "$Valor é Valor Positivo";
    }else if($Valor<0)    {
        echo "$Valor é Valor Negativo";
    }else{
        echo "$Valor é Igua a Zero";
    }

    ?>

</body>
</html>
