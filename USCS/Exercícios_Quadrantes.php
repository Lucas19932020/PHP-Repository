<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Quadrantes</h1>
    <?php
    
    $X = 00;
    $Y = 0;

    if($X == 0 || $Y == 0)
        echo "$X, $Y";
    else if ($X > 0 && $Y > 0 )
    for($i=$X; $i >= 0; $i--){
        if($X == 0 || $Y == 0){
            echo "$X, $Y <br>";
            $i = 0;
        }else{
        echo "$X, $Y Primeiro Quadrante<br>";
        $X--;
        $Y--;
        }
    }
    else if ($X < 0  && $Y > 0 )
    for($i=$Y; $i >= 0; $i--){
        if($X == 0 || $Y == 0){
            echo "$X, $Y <br>";
            $i = 0;
        }else{
            echo "$X, $Y Segundo Quadrante <br>";
        $X++;
        $Y--;
        }
    }else if ($X < 0  && $Y < 0 )
    for($i=$X; $i <= 0; $i++){
        if($X == 0 || $Y == 0){
            echo "$X, $Y <br>";
            $i = 0;
        }else{
            echo "$X, $Y Terceiro Quadrante <br>";
        $X++;
        $Y++;
        }
    }else if ($X > 0  && $Y < 0 )
    for($i=$X; $i >= 0; $i--){
        if($X == 0 || $Y == 0){
            echo "$X, $Y <br>";
            $i = 0;
        }else{
            echo "$X, $Y Quarto Quadrante <br>";
        $X--;
        $Y++;
        }
    }
     ?>
</body>
</html>