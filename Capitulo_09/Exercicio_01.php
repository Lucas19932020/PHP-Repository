<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $carros = array("Brasilia", "Fusca", "Chevete", "Fox");
        echo "<pre>";
        echo "Adicionando carros ao Array \$carros.<br>";
        print_r($carros);
        echo "<br>Imprimindo o carro na posição 2 ou índice 1 do array \$carros";
        echo "Carro da Segunda posição: $carros[1]";
        echo "</pre>";

        $carros[4] = "Gol";
        $carros[5] = "Pálio";
    
        echo "<pre>";
        echo "<br>Imprimindo o carro da última posição do array \$carros<br>";
        echo "Carro da última posição: ".$carros[count($carros)-1]."<br><br>";
        echo "Imprimindo novamente o Array \$carros.<br>";
        print_r($carros);
        echo "</pre> <br><br>";



    ?>


</body>
</html>