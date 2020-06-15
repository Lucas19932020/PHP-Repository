<?php

    
    $con = mysqli_connect('localhost', 'root', '', 'cadastro');
        
    $sql = "SELECT * FROM pessoas";
    
   

    if (mysqli_query($con,$sql)){
        $resultado = mysqli_query($con, $sql);
        }
        else{
            $_SESSION['MensagemErro'] = "É necessário criar a base de dados primeiro para acessar a página de registros";  
            header('Location: criacaobancodedados.php');      
        }
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
<body style = "background-color :#bed2e4">
<h1 align=center>Cadastrados</h1>


<div class="container">
<svg class="bi bi-arrow-return-left" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M5.854 5.646a.5.5 0 0 1 0 .708L3.207 9l2.647 2.646a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 0 1 .708 0z"/>
  <path fill-rule="evenodd" d="M13.5 2.5a.5.5 0 0 1 .5.5v4a2.5 2.5 0 0 1-2.5 2.5H3a.5.5 0 0 1 0-1h8.5A1.5 1.5 0 0 0 13 7V3a.5.5 0 0 1 .5-.5z"/>
</svg>  <a class="btn btn-primary" href="cadastro.php">Voltar para cadastro</a>

<br>
 <table class="table table-bordered table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Sobrenome</th>
      <th scope="col">Idade</th>
      <th scope="col">Email</th>
      <th scope="col">Remover</th>
    </tr>
  </thead>
 <tbody>
             <?php
           
                    while ($pessoas = mysqli_fetch_array($resultado)){
                        $id = $pessoas['id'];
                        $nome = $pessoas['Nome'];                        
                        $sobrenome = $pessoas['Sobrenome'];
                        $idade = $pessoas['Idade'];
                        $email = $pessoas['Email'];
                        echo "<tr>
                                <td>$id</td>
                                <td>$nome</td>
                                <td>$sobrenome</td>
                                <td>$idade</td>
                                <td>$email</td>
                                <td> <a class='btn btn-small btn-danger' href='delete.php?id=$id'>Excluir</a></td>
                                </tr>"
                            ;
                    }

                ?>
 
    </tbody>

</body>
</html>