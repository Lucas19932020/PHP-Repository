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
        }else{
            $sql = "DELETE FROM cliente WHERE Nome = ('$_POST[Nome]')";
            if (mysqli_query($con,$sql)){
                echo "Linha deletada com sucesso!!!";
            }else{
                echo "Erro: " . mysqli_error($con);
            }
        mysqli_close($con);
        }
    ?>
</body>
</html>