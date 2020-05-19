<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if(empty($_POST["Enviar"])){
    echo "<form action='Exercicios_Quadrantes_upgraded.php' method='post'>";
    echo "X:        <input type='text' name = 'X'> <br>";
    echo "Y:        <input type='text' name = 'Y' ><br>";
    echo "<input type='submit' value= 'Enviar' name = 'Enviar'>";
    echo "<input type='reset'  value= 'Limpar' name = 'Limpar'>";
    echo "</form>";
}
?>

<?php
if(isset($_POST["Enviar"])){
    $X = $_POST["X"];
    $Y = $_POST["Y"];
    if($X == "" || $Y == ""){
        echo "<form action='Exercicios_Quadrantes_upgraded.php' method='post'>";
        echo "X:        <input type='text' name = 'X'> <br>";
        echo "Y:        <input type='text' name = 'Y' ><br>";
        echo "<input type='submit' value= 'Enviar' name = 'Enviar'>";
        echo "<input type='reset'  value= 'Limpar' name = 'Limpar'>";
        echo "</form>";
        echo "<br>Uma das cordenadas está vazia, por favor insira os valores novamente";
    }
    else if($X == 0 || $Y == 0){
        echo "$X, $Y";
        echo "<br> <br> <br>Fim de programa";
    }else if($X > 0 && $Y > 0){
        echo "<form action='Exercicios_Quadrantes_upgraded.php' method='post'>";
        echo "X:        <input type='text' name = 'X'> <br>";
        echo "Y:        <input type='text' name = 'Y' ><br>";
        echo "<input type='submit' value= 'Enviar' name = 'Enviar'>";
        echo "<input type='reset'  value= 'Limpar' name = 'Limpar'>";
        echo "</form>";
        echo "<br>$X, $Y Primeiro Quadrante";
    }else if($X < 0 && $Y >0){
        echo "<form action='Exercicios_Quadrantes_upgraded.php' method='post'>";
        echo "X:        <input type='text' name = 'X'> <br>";
        echo "Y:        <input type='text' name = 'Y' ><br>";
        echo "<input type='submit' value= 'Enviar' name = 'Enviar'>";
        echo "<input type='reset'  value= 'Limpar' name = 'Limpar'>";
        echo "</form>";
        echo "<br>$X, $Y Segundo Quadrante";
    }else if($X < 0 && $Y <0){
        echo "<form action='Exercicios_Quadrantes_upgraded.php' method='post'>";
        echo "X:        <input type='text' name = 'X'> <br>";
        echo "Y:        <input type='text' name = 'Y' ><br>";
        echo "<input type='submit' value= 'Enviar' name = 'Enviar'>";
        echo "<input type='reset'  value= 'Limpar' name = 'Limpar'>";
        echo "</form>";
        echo "<br>$X, $Y Terceiro Quadrante";
    }else if($X > 0 && $Y < 0){
        echo "<form action='Exercicios_Quadrantes_upgraded.php' method='post'>";
        echo "X:        <input type='text' name = 'X'> <br>";
        echo "Y:        <input type='text' name = 'Y' ><br>";
        echo "<input type='submit' value= 'Enviar' name = 'Enviar'>";
        echo "<input type='reset'  value= 'Limpar' name = 'Limpar'>";
        echo "</form>";
        echo "<br>$X, $Y Quarto Quadrante";
    }
    }
 ?>
</body>
</html>