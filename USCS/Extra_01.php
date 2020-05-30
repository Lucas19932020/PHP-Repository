<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    function podeSeAposentar(idade. sexo .contribuicao){
    return (sexo = "F" && idade >= 60 && contribuicao >= 30) ||  (sexo = "M" && idade >= 65 && contribuicao >= 30)
    }

    echo (podeSeAposentar(60. "F". 30));
    ?>
</body>
</html>