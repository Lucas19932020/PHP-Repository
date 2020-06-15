
<?php
$mensagem = "";

if (isset($_POST['btnCadastrar'])){
    $id_nome_produto = $_POST['txtProdu'];
    $id_codigo = $_POST['txtNumProdu'];
    $id_tamanho = $_POST['txtTamanhoProdu'];
    
  

    $con = mysqli_connect('localhost', 'root', '', 'projeto');
    
    $sql = "INSERT INTO produtos VALUES ('$id_nome_produto', '$id_codigo', '$id_tamanho')";

    if (mysqli_query($con, $sql)){
        $mensagem = "<div class='alert alert-success'>Registro gravado com sucesso!</div>";
    }else{
        $mensagem = "<div class='alert alert-danger'>Erro ao gravar o registro!</div>";
    }
    
    mysqli_close($con);
}


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>CADASTRADO</title>
    
</head>
<body>
<header>
<img src="roupa-cadastro1.jpg" alt="" class="img-thumbnail">
</header>
</br></br>
    <h4>Dados da peça:</h4></br>

   <p> 
       Nome do produto: <?php echo $_POST["txtProdu"]; ?></br>
       Nome: <?php echo $_POST["txtNumProdu"]; ?></br>
       Idade: <?php echo $_POST["txtTamanhoProdu"]; ?></br>
          
    </p>
    <div class="container">
        <?php echo $mensagem; ?>
        <form action="listarProduto.php" method="POST">

            <input class="btn btn-success" type="submit" value="Proximo" name="btnProximo">
            <a class="btn btn-primary" href="cadastrarRoupa.php">Voltar</a>
        </form>
        
    </div>
    
</body>
</html>