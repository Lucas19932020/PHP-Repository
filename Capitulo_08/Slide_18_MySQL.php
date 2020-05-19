<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Criando conexão com a base de dados lp1
    $con = mysqli_connect("localhost", "root", "", "lp1");
    //Check connection
    if(mysqli_connect_errno()){
        echo "Falha ao conectar com o MySQL: " . mysqli_connect_error();
    }
    $sql1 = "INSERT INTO pessoa VALUES ('Ana', 'Souza', 20)";
    mysqli_query($con,$sql1);
    $sql2 = "INSERT INTO pessoa (Nome, Sobrenome, Idade) VALUES ('Carlos', 'Costa', 21)";
    mysqli_query($con,$sql2);
    mysqli_close($con);
    echo "Valores inseridos na tabela pessoas corretamente";
    ?>
</body>
</html>