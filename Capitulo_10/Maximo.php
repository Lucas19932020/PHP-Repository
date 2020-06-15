<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $lista = array(5, 10, 99, 100, 11);
        $tamanho = sizeof($lista);
        
        echo maximo($lista,$tamanho);

        function maximo($lista, $tamanho){
            if($tamanho == 1)
                return $lista[0];
            else
                return max($lista[$tamanho-1], maximo($lista, $tamanho-1));
        }
    ?>
</body>
</html>