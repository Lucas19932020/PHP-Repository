<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="imagem.css" rel="stylesheet">
</head>
    <body style="background-color: rgb(200, 197, 201)">
        <div class="d">
            <img src="coin.gif" height="400px" width="400px">
        </div>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <?php
            Session_Start();
            if(empty($_SESSION['Inicio'])){
                header('Location: Welcome_Page.php');
            }
            $con = mysqli_connect("localhost","root","","bank");
            if(mysqli_connect_errno($con)){
                $_SESSION['MensagemErro'] = "É necessário criar a base de dados primeiro!";
                header('Location: Controller.php');
            }
        ?>
        <h1 align=center>Confiramação para deletar a base de dados</h1>
        <div align=center class='alert alert-danger'><h4><b>Atenção!</b><br>Ao deletar a base de dados todo os registros serão perdidos</h4></div>
        <p align=center>
            Para deletar o banco de dados escreva "DELETAR" com todas as letras maiúsculas.<br'>
        <p>

        <form action="Drop_Database.php" method="POST">
            <label for="">Confirmação</label>
            <input class="form-control" type="text" name="deletar" id="">
            <input class="btn btn-success" type="submit" value="Enviar" name="btnCadastrar">
        </form>
    </body>
</html>
