
<?php
session_start();
$id_nome_produto = $_GET['id_nome_produto'];
$id_codigo = $_GET['id_codigo'];
$id_tamanho = $_GET['id_tamanho'];


$con = mysqli_connect('localhost', 'root', '', 'projeto');
    
$sql = "DELETE FROM nomes_produtos WHERE id_nome_produto= '$id_nome_produto' and id_codigo='$id_codigo' and id_tamanho='$id_tamanho'";

if (mysqli_query($con, $sql)){
    header('Location: listarProduto.php');
}else{
    echo "Erro ao efetuar exclusão";
}

mysqli_close($con);
?>

  </style>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Excluir peça</title>
</head>
<body>
<header>
<img src="roupas-excluir1.jpg" alt="" class="img-thumbnail">
</header>
<form action="listarProduto.php" method="POST">

<input class="btn btn-success" type="submit" value="confirmar" name="btnConfirmar">
<a class="btn btn-primary" href="listarProduto.php">Voltar</a>
</form>
</body>
</html>

