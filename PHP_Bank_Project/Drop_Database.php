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
                if( $_POST["deletar"] === "DELETAR"){
                    $con = mysqli_connect("localhost", "root", "");
                    $sql="DROP DATABASE Bank";
                    if (mysqli_query($con,$sql)){
                        $_SESSION['MensagemDeletar'] =  "Base de Dados removida com sucesso!!!";
                        header('Location: Controller.php');
                    }else{
                        $_SESSION['MensagemDeletar'] =  ("Erro: " . mysqli_error($con));
                        header('Location: Controller.php');
                    }
                    mysqli_close($con);
                }else{
                    $_SESSION['MensagemDeletar'] = "A base de dados <b>não</b> foi deletada!";
                    header('Location: Controller.php');
                }
            }
            ?>
    </body>
</html>
