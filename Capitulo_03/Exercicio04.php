<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Unidade 03 - Atividade 04</h1>
        <?php
            $i = 1;
            $valor = 1;

            while($i <= 10){
                if($valor%2 == 0 && $valor < 20){
                    echo "$valor, ";
                    $i++;
                }else if($valor%2 == 0 && $valor == 20){
                    echo "$valor";
                    $i++;
                }
                $valor++;
            }
        ?>
</body>
</html>