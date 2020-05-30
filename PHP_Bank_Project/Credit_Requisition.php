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
                if($_POST['creditar'] == 0){
                    $_SESSION['creditoErro'] = "Erro! Verifique novamente o valor a ser creditado na conta de número $num_conta!";
                    header('Location: Registers.php');
                }else{
                    $creditar=$_POST['creditar'];
                    $saldo=$_POST['saldo'];
                    $num_conta=$_POST['num_conta'];
                
                    $saldo = $saldo+$creditar;

                    $con = mysqli_connect('localhost', 'root', '', 'bank');
                    $sql = "UPDATE cliente SET saldo = '$saldo' WHERE num_conta = '$num_conta'";
                    if (mysqli_query($con, $sql)){
                        $_SESSION['creditoCerto'] = "Valor de R$$creditar creditado com sucesso na conta de número: $num_conta!";
                        header('Location: Registers.php');
                    }else{
                        $_SESSION['creditoErro'] = "Erro ao creditar o valor na conta número: $num_conta!";
                        header('Location: Registers.php');
                    }
                    mysqli_close($con);
                }
            } 
        ?>
    </body>
</html>
