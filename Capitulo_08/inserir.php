<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body bgcolor="555555">
    <?php
        $con = mysqli_connect("localhost", "root", "", "lp1");
        if(mysqli_connect_errno($con)){
            echo "Erro: " . mysqli_connect_error();
        }else{
            $sql = "INSERT INTO Pessoa VALUES('$_POST[nome]', '$_POST[sobrenome]', '$_POST[idade]')";
            if (mysqli_query($con,$sql)){
                echo "Pessoa inserida com sucesso!!!";
                }else{
                echo "Erro: " . mysqli_error($con);
        }
        mysqli_close($con);
        }
    ?>
</body>
</html>