<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $a = $_GET["param1"];
        $b = $_GET["param2"];
        if($a > $b)
            echo "$a é maior que $b";
        else if($a == $b)
            echo "$a é igual a $b";
        else if($a < $b)
            echo "$a é menor que $b";
    ?>
</body>
</html>