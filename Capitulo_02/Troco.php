<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Troco</title>
</head>
<body>
    <h1>Troco</h1>
    <?php
    $Troco = 576.00;
    
    for($Q_100 = 0; $Troco >= 100; $Q_100++)
        $Troco = $Troco - 100;
    for($Q_50 = 0; $Troco >= 50; $Q_50++)
        $Troco = $Troco - 50;
    for($Q_20 = 0; $Troco >= 20; $Q_20++)
        $Troco = $Troco - 20;
    for($Q_10 = 0; $Troco >= 10; $Q_10++)
        $Troco = $Troco - 10;
    for($Q_5 = 0; $Troco >= 5; $Q_5++)
        $Troco = $Troco - 5;
    for($Q_2 = 0; $Troco >= 2; $Q_2++)
        $Troco = $Troco - 2;
    for($Q_1 = 0; $Troco >= 1; $Q_1++)
        $Troco = $Troco - 1;

        
        echo "Quantidade de notas de R$100 dadas de troco: $Q_100 <br>";
        echo "Quantidade de notas de R$50 dadas de troco:  $Q_50 <br>";
        echo "Quantidade de notas de R$20 dadas de troco:  $Q_20 <br>";
        echo "Quantidade de notas de R$10 dadas de troco:  $Q_10 <br>";
        echo "Quantidade de notas de R$5 dadas de troco:  $Q_5 <br>";
        echo "Quantidade de notas de R$2 dadas de troco:  $Q_2 <br>";
        echo "Quantidade de moedas de R$1 dadas de troco:  $Q_1 ";


    ?>
</body>
</html>