<?php

    
    $con = mysqli_connect('localhost', 'root', '', 'vendas');
        
    $sql = "SELECT * FROM cliente";
    
    $resultado = mysqli_query($con, $sql);

    
        
    mysqli_close($con);


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
        <a class="btn btn-primary" href="Professor_Exercício_01_Inserir_Cliente.php">Voltar</a>
        <table class="table table-responsive table-striped">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Telefone</th>
                    <th>Mensagem</th>
                    <th>Remover</th>
                </tr>
            </thead>
            <tbody>
                
                <?php
                    while ($cliente = mysqli_fetch_array($resultado)){
                        $nome = $cliente['Nome'];
                        $e_mail = $cliente['E_mail'];
                        $telefone = $cliente['Telefone'];
                        $mensagem = $cliente['Mensagem'];
                        echo "<tr>
                                <td>$nome</td>
                                <td>$e_mail</td>
                                <td>$telefone</td>
                                <td>$mensagem</td>
                                <td><a class='btn btn-small btn-danger' href='Professor_Exercício_01_Excluir.php?nome=$nome&e_mail=$e_mail&telefone=$telefone&mensagem=$mensagem'>Excluir</a></td>
                            </tr>";
                    }

                ?>
            </tbody>
        </table>        

    </div>
    

</body>
</html>