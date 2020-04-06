<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Unidade 03 - Atividade 02</h1>
        <?php
            $i = 1;
            $valor = 1;

            while($i <= 20){
                if($valor%2 == 0){
                    echo "* Número$i => $valor <br>";
                    $i++;
                }
                $valor++;
            }
        ?>
</body>
</html>