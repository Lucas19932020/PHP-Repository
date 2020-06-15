<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        $contador = 0;
        $file = fopen("arquivo1.txt","r");
        while (!feof($file)){
            $linha = fgetc($file);
            if($linha == "a" || $linha == "A" )
            $contador++;
            
        }
        echo $contador;
        fclose($file);
    ?>
</body>
</html>