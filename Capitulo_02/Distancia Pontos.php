<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Distância Entre dois Pontos</title>
</head>
<body>
    <h1>Distância Entre dois Pontos</h1>
    <?php
    $A_X = 2;
    $A_Y = 2;
    $B_X = 5;
    $B_Y = 5;
    $cat_1 = pow(($B_X - $A_X),2);
    $cat_2 = pow(($B_Y - $A_Y),2);
    $hip = sqrt($cat_1+$cat_2);
    echo "A distância do ponto A para o ponto B é: ", number_format($hip,2);
    ?>
</body>
</html>