<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $idade = $_GET["idade"];

        if($idade >= 5 && $idade <= 7)
            echo "Nadador categoria infantil A";
        else if($idade >= 8 && $idade <= 10)
            echo "Nadador categoria infantil B";
        else if($idade >= 11 && $idade <= 13)
            echo "Nadador categoria juvenil A";
        else if($idade >= 14 && $idade <=17)
            echo "Nadador categoria juvenil B";
        else if($idade >= 18)
            echo "Nadador categoria adulto";
    ?>
</body>
</html>