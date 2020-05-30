<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $con = mysqli_connect("localhost","root","");
        if(mysqli_connect_errno($con)){
            echo "Erro ao conectar com a base de dados: " . mysqli_connect_errno();
        }else{
            //Criando base de dados
            $sql="CREATE DATABASE lp1";
            if(mysqli_query($con,$sql)){
            echo "Base de Dados criada com sucesso!!!";
        }else{
            echo "Erro:" .mysqli_error($con);
        }
        mysqli_close($con);
        }
    ?>
</body>
</html>