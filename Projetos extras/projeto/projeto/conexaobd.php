<?php

$con = mysqli_connect("localhost", "root", "");

if (mysqli_connect_errno($con)){
    echo "Erro ao conectar com a base de dados: ".mysqli_connect_error();
}
else {
    $sql  = "CREATE DATABASE projeto";
    if (mysqli_query($con, $sql)){
    echo "Base de dados criada com sucesso!!!";
    }
    else {
        echo "Erro...".mysqli_error($con);
    }
    mysqli_close($con);

}

$con = mysqli_connect("localhost", "root", "", "projeto");

$sql = "CREATE TABLE produtos (id_nome_produto CHAR(30), id_numero_serie INT, id_tamanho CHAR(2) )";

if (mysqli_query($con, $sql)){
    echo "Tabela criada com sucesso!!!";

}
else {
    echo "Erro: ".mysqli_error($con);

    }
    mysqli_close($con);

?>

