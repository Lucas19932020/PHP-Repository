

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Cadastro de roupa em PHP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Registro Roupa</title>

</head>
<body>
<header>
<img src="roupa-cadastro1.jpg" alt="" class="img-thumbnail">
</header>
<div class="container">
        
        <form action="cadastro_realizado.php" method="POST">
        
            <label for="">Nome do produto</label>
            <input class="form-control" type="text" name="txtProdu" id="">
            <label for="">Numero de série</label>
            <input class="form-control" type="text" name="txtNumProdu" id="">
            <label for="">Tamanho</label>
            <input class="form-control" type="text" name="txtTamanhoProdu" id="">

            <input class="btn btn-success " type="submit" value="Cadastrar" name="btnCadastrar">
        </form>
    </div>
</body>
</html>