<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendedor salário</title>
</head>
<body>
    <h1>Salário do vendedor</h1>
    <?php
        $Sal_fix = 5000.00;
        $Venda = 12300.30;
        $taxa_Comissão = (15/100);
        $Comissão = ($Venda*$taxa_Comissão) + $Sal_fix;

        echo "Vendedor seu salário é de: R$", number_format($Sal_fix,2), "<br>";
        echo "O seu total de vendas neste mês de Outubro é de R$", number_format($Venda,2), "<br>";
        echo "Neste mês você receberá devido o valor da comissão: R$", number_format($Comissão,2), "<br>";


    ?>
</body>
</html>