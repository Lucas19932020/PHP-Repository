<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $n = 5;
        echo "$n! = ";

        if($n >= 2){
            for($i = $n; $i >= 1; $i--){
                if ($i >= 2)
                    echo " $i * ";
                else if ($i == 1 )
                    echo " $i = ";
            }
        }
        echo " ".fatorial($n);

        function fatorial ($n){
            if($n < 1 )
                return 1;
            else
                return $n * fatorial($n-1);
        }

    ?>
</body>
</html>