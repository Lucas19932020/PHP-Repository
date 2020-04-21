<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $color = "red";

    $second = date('s');

    $color = ($second % 2 == 0) ? "blue" : "red";

    ?>
    <body bgcolor = "<?php echo $color; ?>">

</body>
</html>