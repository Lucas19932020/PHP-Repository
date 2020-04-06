<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <h1> Ordem crescente dos valores Inseridos</h1>
<h2>
    <?php
    $v1 = 80;
    $v2 = 8;
    $v3 = 70;

    if($v1 == $v2 && $v2 == $v3)
        Echo "$v1 $v2 $v3";
    else{
    if ($v1 > $v2 && $v1 > $v3)
        Echo "$v1";
    else if ($v1 > $v3 && $v1 > $v2)
        Echo "$v1";
    if ($v2 > $v1 && $v1 > $v3)
        Echo "$v2";
    else if ($v2 > $v3 && $v2 > $v1)
        Echo "$v2";
    if ($v3 > $v1 && $v1 > $v2)
        Echo "$v3";
    else if ($v3 > $v2 && $v2 > $v1)
        Echo "$v3";

    if ($v2 >= $v1 && $v1 >= $v3)
        Echo ", $v1";
    else if ($v3 >= $v1 && $v1 >= $v2)
        Echo ", $v1";
    if ($v1 >= $v2 && $v2 >= $v3)
        Echo ", $v2";
    else if ($v3 >= $v2 && $v2 >= $v1)
        Echo ", $v2";
    if ($v1 >= $v3 && $v3 >= $v2)
        Echo ", $v3";
    else if ($v2 >= $v3 && $v3 >= $v1)
        Echo ", $v3";

    if ($v1 <= $v2 && $v2 <= $v3)
        Echo ", $v1";
    else if ($v1 <= $v3 && $v3 <= $v2)
        Echo ", $v1";
    if ($v2 <= $v1 && $v1 <= $v3)
        Echo ", $v2";
    else if ($v2 <= $v3 && $v3 <= $v1)
        Echo ", $v2";
    if($v3 <= $v1 && $v1 <= $v2)
        Echo ", $v3";
    else if ($v3 <= $v2 && $v2 <= $v1)
        Echo ", $v3";
    }

    ?>
  </h2>
</body>
</html>
