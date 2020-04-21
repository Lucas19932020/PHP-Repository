<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $altura = $_GET["altura"];
    $sexo = $_GET["sexo"];

    if($sexo == "M"){
        $pesoideal = (72.7*$altura)-58;
        echo "Seu peso ideal é $pesoideal";
    }
    if($sexo == "F"){
        $pesoideal = (62.1*$altura)-44.7;
        echo "Seu peso ideal é $pesoideal";
    }
    ?>
</body>
</html>