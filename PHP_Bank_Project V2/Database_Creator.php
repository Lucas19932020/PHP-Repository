<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <?php
            Session_Start();
            if(empty($_SESSION['Inicio'])){
                header('Location: Welcome_Page.php');
            }else{
                $con = mysqli_connect("localhost","root","");
                if(mysqli_connect_errno($con)){
                    echo "Erro ao conectar com a base de  dados: " . mysqli_connect_errno();
                }else{
                    $sql="CREATE DATABASE Bank";
                    if(mysqli_query($con,$sql)){
                        header('Location: Table_Creator.php');
                    }else{
                        $mensagemErro = "Erro: " .mysqli_error($con);
                        if($mensagemErro === "Erro: Can't create database 'bank'; database exists"){
                            $_SESSION['MensagemErro'] = "Erro: Banco de dados já existe!";
                            header('Location: Controller.php');
                        }else
                            $_SESSION['MensagemErro'] = $mensagemErro;
                    }
                mysqli_close($con);
                }  
            }
        ?>
</body>
</html>