<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
        <?php
            Session_Start();
            if(empty($_SESSION['Inicio'])){
                header('Location: Welcome_Page.php');
            }else{
                if($_POST['debitar'] == 0){
                    $num_conta=$_POST['num_conta'];
                    $_SESSION['debitoErro'] = "Erro! Verifique novamente o valor a ser debitado da conta de número $num_conta!";
                    header('Location: Registers.php');
                }else{
                    $debitar=$_POST['debitar'];
                    $saldo=$_POST['saldo'];
                    $num_conta=$_POST['num_conta'];

                    if($saldo < $debitar){
                        $_SESSION['debitoErro'] = "Saldo insuficiente.<br> Saldo atual na conta $num_conta é de R$$saldo e o valor solicitado a ser debitado foi de R$$debitar";
                        header('Location: Registers.php');
                    }else{
                        $saldo = $saldo-$debitar;
                        $con = mysqli_connect('localhost', 'root', '', 'bank');
                        $sql = "UPDATE cliente SET saldo = '$saldo' WHERE num_conta = '$num_conta'";
                            if (mysqli_query($con, $sql)){
                                $_SESSION['debitoCerto'] = "Na conta número $num_conta o valor de R$$debitar debitado com sucesso!";            
                                header('Location: Registers.php');
                            }else{
                                $_SESSION['debitoErro'] = "Erro ao efetuar exclusão.<br>Por favor verifique conexão com a base de dados.";
                                header('Location: Registers.php');
                            }
                        mysqli_close($con);
                    }
                }
            }     
    ?>
</body>
</html>