<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $con = mysqli_connect("localhost", "root", "", "lp1");
        if (mysqli_query($con,$sql)){
            echo "Pessoa inserida com sucesso!!!";
        }else{
            echo "Erro: " . mysqli_error($con);
        }
        
</body>
</html>