<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body style= "background-color : #D1EEEE">
    <h1 align = "center">Seja Bem- Vindo!</h1>

    <br>
    <h2 align= "center" > <font size = "6" >Para prosseguir crie um banco de dados clicando no botão abaixo</font> </h2>
    <p align= center> <svg  class="bi bi-arrow-down-square-fill" align= "center" width="60px" height="60px" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 5a.5.5 0 0 0-1 0v4.793L5.354 7.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 9.793V5z"/>
</svg> </p>
<br>
   <p align= center> <a  style='border-radius: 30px;'class="btn btn-success" href="criacaobancodedados.php">Criar Base de Dados</a></td>
</p>
<br>
<br>
<h3 align= center> <font size = "5">Após criar o banco de dados, vá para a próxima página e junte-se ao clube </font> </h3>
<p align= center> <a style='border-radius: 30px;'class="btn btn-success" href="cadastro.php">Próxima página</a></td>
</p>
</body>
</html>











<?php
    $con = mysqli_connect ("localhost", "root", "");
  if (mysqli_connect_errno($con)){
    echo "Erro ao conectar com a base de dados:" .
  mysqli_connect_error();
   }else{
    //Criando base de dados
    $sql= "CREATE DATABASE cadastro";
    if (mysqli_query($con,$sql)){
        echo "Base de Dados criada com sucesso!!";

    }else{
        echo "Erro: " .mysqli_error($con);
    }
    mysqli_close($con);
 }


    $con = mysqli_connect ("localhost", "root","", "cadastro");
    $sql = "CREATE TABLE Pessoas (id INT NOT NULL AUTO_INCREMENT, Nome CHAR(30), Sobrenome CHAR (30), Idade INT, Email CHAR(30),primary key (id))";
    if (mysqli_query ($con,$sql)){
        echo "Tabela criada com sucesso!!";

    }else{
        echo "Erro: " . mysqli_error ($con);

    }
    mysqli_close ($con);


