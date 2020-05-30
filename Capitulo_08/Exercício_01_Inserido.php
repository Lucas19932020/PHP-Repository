<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body bgcolor="555555">
    <?php
        $con = mysqli_connect("localhost", "root", "", "vendas");
        if(mysqli_connect_errno($con)){
            echo "Erro: " . mysqli_connect_error();
        }else if(empty($_POST["Nome"] || $_POST["E_mail"] || $_POST["Telefone"] || $_POST["Mensagem"])){
            echo "Por favor insira os valores corretamente";
        }else{
            $sql = "INSERT INTO cliente VALUES('$_POST[Nome]', '$_POST[E_mail]', '$_POST[Telefone]','$_POST[Mensagem]')";
            if (mysqli_query($con,$sql)){
                echo "Valores inseridos na tabela cliente com sucesso!!!";
            }else{
                echo "Erro: " . mysqli_error($con);
            }
        mysqli_close($con);
        }
    ?>
</body>
</html>