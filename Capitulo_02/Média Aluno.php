<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Média aluno</title>
</head>
<body>
    <?php
        $P1 = 7.0;
        $P2 = 4.0;
        $P3 = 6.0;

        $media = ($P1 + $P2 + $P3)/3;

        if($media >= 6.00)
        echo number_format($media,2), " - Você foi aprovado";
        else
        echo number_format($media,2), " - Você foi reprovado";

    ?>
</body>
</html>