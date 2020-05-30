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
                $con = mysqli_connect("localhost","root","","bank");
                $sql="CREATE TABLE Cliente(Nome VARCHAR(30), Endereco VARCHAR(30), CPF VARCHAR(15) PRIMARY KEY, Num_Conta VARCHAR(10), Saldo FLOAT(50))";
                if (mysqli_query($con,$sql)){
                    $_SESSION['MensagemCriacao'] = "Certo!";
                    header('Location: Controller.php');
                }else{
                    $_SESSION['MensagemCriacao'] = ("Erro " . mysqli_error($con));
                    header('Location: Controller.php');
                }
            mysqli_close($con);
            }
        ?>
    </body>
</html>
