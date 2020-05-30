<?php

    //NO CASO DE HOUVER UMA CHAVE PRIMÁRIA PARA IDENTIFICAÇÃO DE CADA UM DOS REGISTROS,
    //EX: SE NESTE CASO DA PESSOA HOUVESSE UM CPF, PASSARIA-SE APENAS O CPF PARA A 
    //EXECUÇÃO DA EXCLUSÃO, COMO NESTE CASO NÃO TEMOS NENHUM IDENTIFICADO ÚNICO PARA O REGISTRO
    //ESTAMOS PASSANDO MAIS DE UM PARAMETRO PARA PERFORMAR A EXCLUSÃO.

    $nome = $_GET['nome'];
    $e_mail = $_GET['e_mail'];
    $telefone = $_GET['telefone'];
    $mensagem = $_GET['mensagem'];

    $con = mysqli_connect('localhost', 'root', '', 'vendas');
        
    $sql = "DELETE FROM cliente WHERE nome = '$nome' AND e_mail = '$e_mail' AND telefone = '$telefone' AND mensagem = '$mensagem'";
    
    if (mysqli_query($con, $sql)){
        header('Location: Professor_Exercício_02_Cadastros.php');
    }else{
        echo "Erro ao efetuar exclusão";
    }

    mysqli_close($con);
?>
