<?php
Session_Start();
    $con = mysqli_connect('localhost', 'root', '', 'bank');
    $sql = "SELECT * FROM cliente";
    if (mysqli_query($con,$sql)){
    $resultado = mysqli_query($con, $sql);
    }
    else{
        $_SESSION['MensagemErro'] = "É necessário criar a base de dados primeiro para acessar a página de registros";  
        header('Location: Controller.php');      
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
    <body style="background-color: rgb(200, 197, 201)">
        <h1 align=center>Registros de Contas</h1>
        <?php
            
            if($_SESSION['debitoErro'] != ""){
                $debito = $_SESSION['debitoErro'];
                echo "<div align=center class='alert alert-danger'>$debito</div>";
                $_SESSION['debitoErro'] = "";
            }

            if($_SESSION['debitoCerto'] != ""){
                $debito = $_SESSION['debitoCerto'];
                echo "<div width=80% align=center class='alert alert-success'>$debito</div>";
                $_SESSION['debitoCerto'] = "";
            }

            if($_SESSION['creditoCerto'] != ""){
                $credito = $_SESSION['creditoCerto'];
                echo "<div align=center class='alert alert-success'>$credito</div>";
                $_SESSION['creditoCerto'] = "";
            }

            if($_SESSION['creditoErro'] != ""){
                $credito = $_SESSION['creditoErro'];
                echo "<div align=center class='alert alert-danger'>$credito</div>";
                $_SESSION['creditoErro'] = "";
            }

            if($_SESSION['excluirRegistroCerto'] != ""){
                $exclusao = $_SESSION['excluirRegistroCerto'];
                // 0043 0072 0065 0064 151 164 157 067 067 067 067 067 067
                echo "<div align=center class='alert alert-success'>$exclusao</div>";
                $_SESSION['excluirRegistroCerto'] = "";
            }

            if($_SESSION['excluirRegistroErro'] != ""){
                $exclusao = $_SESSION['excluirRegistroErro'];
                echo "<div align=center class='alert alert-danger'>$exclusao</div>";
                $_SESSION['excluirRegistroErro'] = "";
            }

            if($_SESSION['MensagemDeErro'] != ""){
                echo "<div align=center class='alert alert-danger'>".$_SESSION['MensagemDeErro'].
                "<p align = center>
                <a href='https://github.com/Lucas19932020/PHP-Repository' class='btn btn-secondary btn-lg active' role='button' aria-pressed='true'>Link</a>
                <p>
                </div>";
                $_SESSION['MensagemDeErro'] = "";
            }
        ?>

        <div class="container">
            <table class="table table-striped table-dark">
                <thead>
                    <tr align=center>
                        <th>Nome</th>
                        <th>Endereço</th>
                        <th>CPF</th>
                        <th>Numero da conta</th>
                        <th>Saldo atual</th>
                        <th>Creditar</th>
                        <th>Debitar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        if(empty($_SESSION['Inicio'])){
                            header('Location: Welcome_Page.php');
                        }else{
                            while ($cliente = mysqli_fetch_array($resultado)){
                            $nome = $cliente['Nome'];
                            $endereco = $cliente['Endereco'];
                            $CPF = $cliente['CPF'];
                            $Num_Conta = $cliente['Num_Conta'];
                            $Saldo = $cliente['Saldo'];
                            echo "<tr>
                                    <td>$nome</td>
                                    <td>$endereco</td>
                                    <td>$CPF</td>
                                    <td align=center>$Num_Conta</td>
                                    <td align=center>$Saldo</td>
                                    <td> <a class='btn btn-small btn-success' style='border-radius: 30px;' href='Credit.php?Num_Conta=$Num_Conta'>Creditar</a>  </td>
                                    <td> <a class='btn btn-small btn-warning' style='border-radius: 30px;' href='Debit.php?Num_Conta=$Num_Conta'>Debitar</a> </td>
                                    <td><a class='btn btn-small btn-danger' href='Exclude_Register_Confitmation.php?CPF=$CPF'>Excluir</a></td>
                            </tr>";
                            }
                        }
                    ?>
                </tbody>
            </table>
            <table> 
                <tr>
                    <td width=1000><a class="btn btn-primary" href="Controller.php">Voltar</a></td>
                    <td width=1000 align = right ><a class="btn btn-outline-light"; href="Controle.php">456173746572456767</a></td>            
                <tr>
            </table>
        </div>
        
    </body>
</html>
