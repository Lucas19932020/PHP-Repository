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
        $valor = 0;
        for($i = 1; $i <= 100; $i++){
            $valor = $valor + $i;
        }
        echo "Valor: $valor";
    ?>
</body>
</html>