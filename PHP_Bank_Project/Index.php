<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> 
    <link href="imagem.css" rel="stylesheet">
</head>
    <body style="background-color: rgb(200, 197, 201)">
    <img src="mario.gif" height="300px" width="300px">
    <div class="p">
        <img src="b.png" height="200px" width="200px">
    </div>
    <h1 align=center>Seja bem-vindo ao Projeto Banco</h1>
        <?php
        ini_set('display_errors', 0 );
        error_reporting(0);
        

        $con = mysqli_connect("localhost","root","","bank");
        if(mysqli_connect_errno($con)){
            echo "<div class='alert alert-danger'>
            <div  align=center>
            <b>Atenção!</b><br>
            Verificamos um erro na comunicação com a Base de Dados. <br>
            Se for a primeira vez que você está acessando o progrma será necessário fazer a criação da base de dados no MySQL!<br>
            Na próxima página terá a opção para a criação da base de dados, assim como, a tabela que será utilizada.<br>
            Para isso é necessário que o banco de dados esteja com as seguintes definições:
            </div>
            Local de acesso: localhost<br>
            Usuário: root.<br>
            Senha: <b>Não deve possuir senha de acesso</b>.<br>
            (Configurações inicais do XAMPP).
            </div>";
        }

        session_start();
        $_SESSION['MensagemDeletar'] = "";
        $_SESSION['MensagemErro'] = "";
        $_SESSION['MensagemCriacao'] = "";
        $_SESSION['debitoErro'] = "";
        $_SESSION['debitoCerto'] = "";
        $_SESSION['creditoCerto'] = "";
        $_SESSION['creditoErro'] = "";
        $_SESSION['excluirRegistroCerto'] = "";
        $_SESSION['excluirRegistroErro'] = "";
        $_SESSION['Inicio'] = "Sessão Iniciada";
        $_SESSION['_53cr37'] = "";
        $_SESSION['MensagemDeErro'] = "";
        ?>
        <div class='container'>
            <div class='row'>
                <div class='col-md-6' style='margin-left:275px;'>
                    <div class="container p-3 my-3 bg-dark text-white"> <h5 align=center>Seja muito bem-vindo ao nosso Projeto Banco!!!</h5>
                    <br> &emsp;&emsp;&emsp; Neste projeto é possível registrar um novo cliente, ver a lista de todos os clientes registrados, efetuar operações de crédito e débito em cada conta criada e  excluílos se necessário.<br><br><br>
                    At.te <br>
                    Guilherme Comforti.<br>
                    Lucas Leite Meslisi. </div>
                </div>
            </div>
        </div>
        <p align=center>
        <br>
        <br>
        <br>
        <br>
        <br>
        <a class='btn btn-small btn-primary' style='border-radius: 30px;' href='Controller.php'>Acessar página para registrar cliente</a>
        </p>
    </body>
</html>
