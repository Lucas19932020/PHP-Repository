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
    echo func ($n);

    function func ($n){
        if($n < 2)
            return 1;
        
            return ($n-1) * func($n-1);
        

    }

    ?>
</body>
</html>