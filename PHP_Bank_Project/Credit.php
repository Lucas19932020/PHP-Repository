<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="imagem.css" rel="stylesheet">
</head>
    <body style="background-color: rgb(200, 197, 201)">
    <div class="g">
        <img src="cat.gif" height="500px" width="500px">
    </div>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <?php
            Session_Start();
            if(empty($_SESSION['Inicio'])){
                header('Location: Welcome_Page.php');
            }else{
                $Num_Conta= $_GET['Num_Conta'];
                $con = mysqli_connect('localhost', 'root', '', 'bank');
                $sql = "SELECT saldo FROM cliente WHERE Num_Conta = '$Num_Conta'";
                $resultado = mysqli_query($con, $sql);
                $cliente = mysqli_fetch_array($resultado);
                $Saldo = $cliente['saldo'];
                if (mysqli_query($con, $sql)){
                    echo "O saldo atual na conta <b> $Num_Conta </b> é de <b>R$ $Saldo</b>";
                    echo "<br>Gostaria de fazer uma operação de <b>Crédito</b> nesta conta?<br><br>";
                    echo "<form class action='Credit_Requisition.php' method='POST'>
                    <label for=''>Creditar na conta o valor de: R$</label>
                    <input  type='number' name=creditar creditar='txtCreditar' id=''><br>
                    <input type='hidden' name='saldo' value='$Saldo' />
                    <input type='hidden' name='num_conta' value='$Num_Conta' />
                    <input class='btn btn-success' style='border-radius: 30px;' type='submit' value='Confirmar' name='btnConfirmar'>
                    </form><br>";
                    echo"<a class='btn btn-primary' href='Registers.php'>Voltar</a>";
                }else{
                    echo "Erro ao conectar-se ao Banco de Dados, por favor verifique a conexão.";
                }
                mysqli_close($con);
            }
        ?>
</body>
</html>

























<?php $_SESSION['_53cr37'] = "456.085.985-33-777777LuckySeven" ?>
