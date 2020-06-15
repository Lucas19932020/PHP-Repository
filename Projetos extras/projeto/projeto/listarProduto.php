<?php
    session_start();
    $con = mysqli_connect('localhost', 'root', '', 'projeto');
                    
    $sql = "SELECT * FROM produtos";
    if (mysqli_query($con,$sql)){
            
        $resultado = mysqli_query($con, $sql);
    } else {
        echo "Erro ao se conectar com a base de dados";
    }
    mysqli_close($con);
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Lista de Cliente</title>
    <style>

  </style>
</head>
<body>
<header>
<img src="roupas-listagem1.jpg" alt="" class="img-thumbnail">
</header>
<div class="container">
        <a class="btn btn-primary" href="cadastrarRoupa.php">Cadastrar cliente</a>
        <table class="table table-responsive table-striped">
            <thead>
                <tr>
                    <th>Produto</th>
                    <th>Numero</th>
                    <th>Tamanho</th>
                </tr>
            </thead>
            <tbody>
       <?php
                    while ($nome_produtos = mysqli_fetch_array($resultado)){
                        $id_nome_produto = $nome_produtos['id_nome_produto'];
                        $id_codigo = $nome_produtos['id_numero_serie'];
                        $id_tamanho = $nome_produtos['id_tamanho'];
                        
                       
                        echo "<tr>
                                <td>$id_nome_produto</td>
                                <td>$id_codigo</td>
                                <td>$id_tamanho</td>
                                <td><a class='btn btn-small btn-danger' href='excluirRoupa.php?id_nome_produto=$id_nome_produto&id_codigo=$id_codigo&id_tamanho=$id_tamanho'>Excluir</a></td>
                            </tr>";
                    }

                ?>
            </tbody>
        </table>        

    </div>
    
</body>
</html>