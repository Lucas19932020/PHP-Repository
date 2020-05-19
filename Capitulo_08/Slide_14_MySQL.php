<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $con = mysqli_connect("localhost", "root", "");
    $sql="DROP DATABASE lp1";
    if (mysqli_query($con,$sql)){
        echo "Base de Dados removida com sucesso!!!";
    }else{
        echo "Erro: " . mysqli_error($con);
    }
    mysqli_close($con);
    ?>
</body>
</html>