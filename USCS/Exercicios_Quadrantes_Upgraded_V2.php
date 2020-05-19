<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1> Exercício Quadrantes </h1>
<?php
if(empty($_POST["Enviar"])){
    echo "<form action='Exercicios_Quadrantes_Upgraded_V2.php' method='post'>";
    echo "Posição X: <input type='text' name = 'X'> <br>";
    echo "Posição Y: <input type='text' name = 'Y'> <br> <br>";
    echo "<input type='submit' value= 'Enviar' name = 'Enviar'>";
    echo "</form>";
}
if(isset($_POST["Enviar"])){
    $X = $_POST["X"];
    $Y = $_POST["Y"];
    if(isset($_POST["X"]) || isset($_POST["Y"])){
        if($X != 0 && $Y != 0){
        echo "<form action='Exercicios_Quadrantes_Upgraded_V2.php' method='post'>";
        echo "Posição X: <input type='text' name = 'X'> <br>";
        echo "Posição Y: <input type='text' name = 'Y' ><br> <br>";
        echo "<input type='submit' value= 'Enviar' name = 'Enviar'>";
        echo "</form>";
    if($X > 0 && $Y > 0)
        echo "<br>$X, $Y Primeiro Quadrante.";
    else if($X < 0 && $Y >0)
        echo "<br>$X, $Y Segundo Quadrante.";
    else if($X < 0 && $Y <0)
        echo "<br>$X, $Y Terceiro Quadrante.";
    else if($X > 0 && $Y < 0)
        echo "<br>$X, $Y Quarto Quadrante.";
    }else if($X == 0 || $Y == 0 || empty($_POST["X"]) || empty($_POST["Y"])){
        if(empty($_POST["X"]))
            $X = 0;
        if(empty($_POST["Y"]))
            $Y = 0;
       echo "$X, $Y <br> <br> <br> Fim do progrma.";
    }
    }
}
?>
</body>
</html>