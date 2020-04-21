<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$Entrada = 11;
$Impar = 0;

while($Impar < 6){
    if($Entrada % 2 == 1){
        Echo "$Entrada <br>";
        $Entrada++;
        $Impar++;
    }
    else {
        $Entrada++;
    }
}


?>
    
</body>
</html>