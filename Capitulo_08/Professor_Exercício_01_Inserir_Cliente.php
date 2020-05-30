<?php

    $mensagem = "";

    if (isset($_POST['btnCadastrar'])){
        $Nome = $_POST['txtNome'];
        $E_mail = $_POST['txtE_mail'];
        $Telefone = $_POST['txtTelefone'];
        $Mensagem = $_POST['txtMensagem'];
    
        $con = mysqli_connect('localhost', 'root', '', 'vendas');
        
        $sql = "INSERT INTO cliente VALUES ('$Nome', '$E_mail', '$Telefone', '$Mensagem')";
    
        if (mysqli_query($con, $sql)){
            $mensagem = "<div class='alert alert-success'>Registro gravado com sucesso!</div>";
        }else{
            $mensagem = "<div class='alert alert-danger'>Erro ao gravar o registro!</div>";
        }
        
        mysqli_close($con);
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
    
    <div class="container">
        <?php echo $mensagem; ?>
        <form action="Professor_Exercício_01_Inserir_Cliente.php" method="post">
        
            <label for="">Nome</label>
            <input class="form-control" type="text" name="txtNome" id="">
            <label for="">E-mail</label>
            <input class="form-control" type="text" name="txtE_mail" id="">
            <label for="">Telefone</label>
            <input class="form-control" type="text" name="txtTelefone" id="">
            <label for="">Mensagem</label>
            <input class="form-control" type="text" name="txtMensagem" id="">

            <input class="btn btn-success" type="submit" value="Enviar" name="btnCadastrar">
        </form>
        <a class="btn btn-primary" href="Professor_Exercício_02_Cadastros.php">Cadastratros</a>
    </div>
    

</body>
</html>