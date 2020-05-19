<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $a = $_GET["valor"];

        if($a == 0)
           echo "$a é um valor neutro";
        else if($a % 2 == 0){
            echo "$a é par ";
            if($a >= 0)
                echo "e é um valor positivo";
            else
                echo "e é um valor negativo";
        }else {
            echo "$a é ímpar ";
            if($a >= 0)
                echo "e é um valor positivo";
            else
                echo "e é um valor negativo";
    }

    ?>
</body>
</html>