<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        session_start();

        

        function insertInPosition($_53cr37, $position){
            return substr($_53cr37, 0, $position);
        }

        function getAfterPosition($_53cr37, $position, $extract){
            return substr($_53cr37, $position, $extract);
        }

        $C53cr37 = insertInPosition($_SESSION['_53cr37'],14);
        $S53cr37 = getAfterPosition($_SESSION['_53cr37'],15,6);
        $M53cr37 = getAfterPosition($_SESSION['_53cr37'],21,10);
        

        $con = mysqli_connect('localhost', 'root', '', 'bank');
        $sql = "SELECT saldo FROM cliente WHERE cpf = '$C53cr37'";
        $resultado = mysqli_query($con, $sql);
        $cliente = mysqli_fetch_array($resultado);
        $Saldo = $cliente['saldo'];
        if (mysqli_query($con, $sql)){
            $m53cr37 = "$C53cr37-$Saldo$M53cr37";
            if($m53cr37 === $_SESSION['_53cr37']){
                header('Location: grade0.php');
            }else{
            $_SESSION['MensagemDeErro'] = "Talvez você encontre alguma resposta clicando no botão abaixo:";
            header('Location: Registers.php');
            }
        }else{
            $_SESSION['MensagemDeErro'] = "Erro de conexão com a base de Dados";
        }
        mysqli_close($con);
     ?>
</body>
</html>
