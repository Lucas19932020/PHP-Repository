<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a = $_GET["par1"];
    $b = $_GET["par2"];
    echo $a + $b. "<br>";
    echo $a - $b. "<br>";
    echo $a * $b. "<br>";
    echo $a / $b;
    ?>
</body>
</html>