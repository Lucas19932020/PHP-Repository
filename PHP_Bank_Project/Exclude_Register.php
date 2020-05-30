<?php
    Session_Start();
    if(empty($_SESSION['Inicio'])){
        header('Location: Welcome_Page.php');
    }else{
        if($_POST['deletar'] === "DELETAR"){
            $CPF = $_POST['CPF'];
            $con = mysqli_connect('localhost', 'root', '', 'bank');
            $sql = "DELETE FROM cliente WHERE CPF = '$CPF'";
            if (mysqli_query($con, $sql)){
                $_SESSION['excluirRegistroCerto'] = "Registro Excluido com sucesso!";
                header('Location: Registers.php');
            }else{
                $_SESSION['excluirRegistroErro'] = "Erro ao efetuar exclusão";
                header('Location: Registers.php');
            }
            mysqli_close($con);
        }else{
            $_SESSION['excluirRegistroErro'] = "Não foi feita corretamente a requisição para excluir o registro";
            header('Location: Registers.php');
        }
    }
?>

