<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $X = -3;
    $Y = -8;

    if($X == 0 || $Y == 0)
        echo "$X $Y";
    else if ($X > 0 && $Y > 0 )
        echo "$X $Y Primeiro Quadrante";
    else if ($X < 0  && $Y > 0 )
        echo "$X $Y Segundo Quadrante";
    else if ($X < 0  && $Y < 0 )
        echo "$X $Y Terceiro Quadrante";
    else if ($X > 0  && $Y < 0 )
        echo "$X $Y Quarto Quadrante";
    ?>
</body>
</html>