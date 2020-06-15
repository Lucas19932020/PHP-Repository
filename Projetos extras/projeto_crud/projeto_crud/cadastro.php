<?php

    $mensagem = "";
    if (isset($_POST['btnCadastrar'])){
        $nome = $_POST['txtNome'];
        $sobrenome = $_POST['txtSobrenome'];
        $email= $_POST['txtEmail'];
        $idade= $_POST['txtIdade'];
        
        
        $con = mysqli_connect ('localhost', 'root','', 'cadastro');
        
        
        $sql = "INSERT INTO pessoas (Nome, Sobrenome, Idade, Email) VALUES ('$nome', '$sobrenome', $idade, '$email')";
    
        if (mysqli_query ($con, $sql)){
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
   
    <body >
        
    <img align = "middle" height="300px" width="300px"src = "imagem3.gif"> 
    <h1 align = center> <font size= "6"> Seja membro do nosso clube!  </font> </h1>
    <h2 align = center> <font size = "5"> Formulário de Cadastro </font> </h2>

    

    <br> <hr> 
    
    <div class="container">
        <?php echo $mensagem; ?>
        <form action="cadastro.php" method="post">
        
            <label for="">Nome</label>
            <input class="form-control" type="text" name="txtNome" id="">
            <label for="">Sobrenome</label>
            <input class="form-control" type="text" name="txtSobrenome" id="">
            <label for="">Idade</label>
            <input class="form-control" type="number" name="txtIdade" id="">
            <label for="">Email</label>
            <input class="form-control" type="email" name="txtEmail" id="">
            <br>

            <input class="btn btn-success" type="submit" value="Cadastrar" name="btnCadastrar">
        </form>
        <a class="btn btn-primary" href="cadastro.php">Voltar</a>
    </div>
    <p align=center>
        <br>
        <br>
        <br>
        <br>
        <br>
        <a class='btn btn-small btn-primary' style='border-radius: 30px;' href='listagem.php'>Acessar página com listagem de cadastrados no nosso clube</a>
        </p>

 </body>
 </html> 
 