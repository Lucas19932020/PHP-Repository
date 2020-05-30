<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body bgcolor = "#777777">
    <?php
        $con = mysqli_connect("localhost", "root", "", "vendas");
        if(mysqli_connect_errno($con)){
            echo "Erro: " . mysqli_connect_error();
        }else {
            $sql = "SELECT * FROM cliente ";
            $resultado = mysqli_query($con,$sql);
            echo "<h2> Cadastrados </h2>";
            while ($venda = mysqli_fetch_array($resultado)){
                echo $venda['Nome'] . "  /  " . $venda['E_mail'] . "  /  " . $venda['Telefone'] . "  /  " . $venda['Mensagem'] .  "<br>";
            }
            mysqli_close($con);
        }
    ?>
</body>
</html>