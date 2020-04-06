<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viagem de Pedro</title>
</head>
<body>
    <?php
        $tempo_viagem = 10;
        $gasto_comb = 12;
        $v_media = 85;
        $custo_comb = 4;
        $distancia = $v_media * $tempo_viagem;
        $litros = $distancia/$gasto_comb;
        $gasto_viagem = $litros * $custo_comb;

        echo "O carro faz $gasto_comb Km/l <br>";
        echo "Na viagem manteve uma velocidade média de $v_media Km/h <br>";
        echo "O tempo gasto na viagem é de $tempo_viagem horas <br>";
        echo "Foi gasto na viagem R$ ", number_format($gasto_viagem,2), "<br>";
    ?>
</body>
</html>