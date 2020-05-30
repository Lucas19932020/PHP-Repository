<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
    <body style="background-color: rgb(200, 197, 201)">
        <div class="container">
            <?php
                ini_set('display_errors', 0 );
                error_reporting(0);

                Session_Start();

                function insertInPosition($CPF, $position, $symbol){
                    return substr($CPF, 0, $position) . $symbol . substr($CPF, $position);
                }

                if(empty($_SESSION['Inicio'])){
                    header('Location: Welcome_Page.php');
                }else{
                    $mensagem = "";
                    if (isset($_POST['btnCadastrar'])){
                        $Nome = $_POST['txtNome'];
                        $CPF = $_POST['txtCPF'];
                        $Endereco = $_POST['txtEndereco'];
                        $conta = rand(1000,9999)."-".rand(0,9);
                        $saldo = 0.0;
                        if(($_POST["txtNome"] != "" && $_POST["txtCPF"] != "" && $_POST["txtEndereco"] != "")){
                            if($CPF > 0 && $CPF < 100000000000){
                                $CPF = str_pad($CPF,11,"0",STR_PAD_LEFT);
                                $CPF = insertInPosition($CPF, 3, '.');
                                $CPF = insertInPosition($CPF, 7, '.');
                                $CPF = insertInPosition($CPF, 11, '-');

                                $con = mysqli_connect('localhost', 'root', '', 'bank');
                                $sql = "INSERT INTO cliente VALUES ('$Nome', '$Endereco','$CPF', '$conta', '$saldo')";
                                if (mysqli_query($con, $sql)){
                                    $mensagem = "<div class='container'>
                                                    <div class='row'>
                                                        <div class='col-md-6' style='margin-left:275px;'>
                                                            <div align=center class='alert alert-success'>Registro gravado com <b>sucesso</b>!!!</div>
                                                        </div>
                                                    </div>
                                                </div>";
                                }else{
                                    $mensagem = "<div class='container'>
                                                    <div class='row'>
                                                        <div class='col-md-6' style='margin-left:275px;'>
                                                            <div align=center class='alert alert-danger'><b>Erro ao gravar o registro!</b><br>Verifique a conexão com a base de dados ou se a ela foi criada corretamente!<br>
                                                            Verifique também se o CPF registrado não é repetido!</div>
                                                        </div>
                                                    </div>
                                                </div>";
                                }
                                mysqli_close($con);
                            }else{
                                $mensagem = "<div class='container'>
                                <div class='row'>
                                    <div class='col-md-6' style='margin-left:275px;'>
                                        <div align=center class='alert alert-danger'><b>Erro ao gravar o registro</b><br>Verifique se novamente o número de CPF!</div>
                                    </div>
                                </div>
                            </div>";
                            }
                        }else{
                            $mensagem = "<div class='container'>
                                            <div class='row'>
                                                <div class='col-md-6' style='margin-left:275px;'>
                                                    <div align=center class='alert alert-danger'><b>Erro ao gravar o registro</b><br>Verifique se não há nenhum dado em branco!</div>
                                                </div>
                                            </div>
                                        </div>";
                        }   
                    }
                    echo "<h1 align='center'> Dados de cadastro do cliente </h1>";

                    if($_SESSION['MensagemCriacao'] === "Certo!"){
                        echo "<div class='container'>
                            <div class='row'>
                                <div class='col-md-6' style='margin-left:275px;'>    
                                    <div align=center class='alert alert-success'>Banco de dados e tabla gerados com sucesso!</div>
                               </div>
                            </div>
                        </div>";
                        $_SESSION['MensagemCriacao'] = "";
                    }
   
                    if($_SESSION['MensagemErro'] != ""){
                        echo "<div class='container'>
                            <div class='row'>
                                <div class='col-md-6' style='margin-left:275px;'>  
                                    <div align=center class='alert alert-danger'>".$_SESSION['MensagemErro']."</div>
                                </div>
                            </div>
                        </div>";
                        $_SESSION['MensagemErro'] = "";
                    }

                    if($_SESSION['MensagemDeletar'] != ""){
                        echo "<div class='container'>
                            <div class='row'>
                                <div class='col-md-6' style='margin-left:275px;'>  
                                    <div align=center class='alert alert-danger'>".$_SESSION['MensagemDeletar']."</div>
                                </div>
                            </div>
                        </div>";
                        $_SESSION['MensagemDeletar'] = "";
                    }
                }    
            ?>

            <?php echo $mensagem; ?>

            <div class="container">
                <div class="row">
                    <div class="col-md-6" style="margin-left:275px; margin-top:200px" >
                        <form action="Controller.php" method="post">
                            <label class="control-label" for="Nome">Nome:</label>
                            <input class="form-control"  style='border-radius: 30px;' type="text" name="txtNome" id="Nome">                            
                            <label for="">CPF: (Somente números)</label>
                            <input class="form-control" style='border-radius: 30px;' type="number" name="txtCPF" id="">
                            <label for="">Endereco:</label>
                            <input class="form-control" style='border-radius: 30px;' type="text" name="txtEndereco" id=""><br>
                            <div class="col text-center">
                                <input class="btn btn-success" style='border-radius: 30px;' type="submit" value="Enviar" name="btnCadastrar">
                            </div>
                    </div>
                </div>    
            </div>
            <br><br><br>
            </form>
            <table>            
                <tbody>
                    <tr>
                        <td width=500><a class="btn btn-primary"  style='border-radius: 30px;' href="Registers.php">Cadastradros</a></td>
                        <td width=500 align=center><a style='border-radius: 30px;'  class="btn btn-success" href="Database_Creator.php">Criar Base de Dados</a></td>
                        <td width=500 align=right ><a style='border-radius: 30px;' class="btn btn-danger" href="Confim_Drop.php">Deletar Base de Dados</a></td>
                    </tr>
                </tbody>
            </table>            
    </body>
</html>
