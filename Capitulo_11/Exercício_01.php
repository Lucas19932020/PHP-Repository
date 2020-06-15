<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        $file = fopen("arquivo1.txt","r");
        while (!feof($file)){
            $linha = fgetc($file);
            if($linha == "A" || $linha == "a"){
                echo "X";
            }else{
            echo "$linha";
            }
        }
        fclose($file);
    ?>
</body>
</html>