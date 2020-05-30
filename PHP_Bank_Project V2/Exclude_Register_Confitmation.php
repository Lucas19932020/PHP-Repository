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
                $con = mysqli_connect('localhost', 'root', '', 'bank');
                if (mysqli_query($con, $sql)){
                    $_SESSION['excluirRegistroCerto'] = "Registro Excluido com sucesso!";
                    header('Location: Registers.php');
                }else{
                    $_SESSION['excluirRegistroErro'] = "Erro ao efetuar exclusão";
                    header('Location: Registers.php');
                }
            }else{  
                $CPF = $_GET['CPF'];
                echo"<h1 align=center>Confiramação para deletar Registro</h1>
                <div align=center class='alert alert-danger'><h4><b>Atenção!</b><br>A exclusão de um registro será permanente!</h4></div>
                <p align=center>
                    Para deletar o registro da base de dados escreva \"DELETAR\" com todas as letras maiúsculas.<br'>
                <p>
                <form action='Exclude_Register.php' method='POST'>
                    <label for=''>Confirmação</label>
                    <input class='form-control' type='text' name='deletar' id=''>
                    <input type='hidden' name='CPF' value='$CPF'/>
                    <input class='btn btn-danger' type='submit' value='Confirmar' name='btnConfirmar'>
                </form>";
            }
        ?>
    </body>
</html>