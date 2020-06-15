<?php

    $id = $_GET['id'];
    $con = mysqli_connect('localhost', 'root', '', 'cadastro');
    $sql = "DELETE FROM pessoas WHERE id = '$id' ";
    if (mysqli_query($con, $sql)){
        header('Location: listagem.php');
    }else{
        echo "Erro ao efetuar exclusão";
    }

    mysqli_close($con);
?>