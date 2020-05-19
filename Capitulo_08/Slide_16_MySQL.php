<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Criando conexão com a base de dados lp1
    $con = mysqli_connect("localhost","root","","lp1");
    $sql="CREATE TABLE Pessoa(Nome CHAR(30), Sobrenome CHAR(30), Idade INT)";
    if (mysqli_query($con,$sql)){
        echo "Tabela criada com sucesso!!";
    }else{
        echo "Erro " . mysqli_error($con);
    }
    mysqli_close($con);
    ?>
</body>
</html>