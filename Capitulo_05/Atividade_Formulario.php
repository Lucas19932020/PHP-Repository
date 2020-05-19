<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: rgb(16, 93, 189)">
    <form action="Atividade_Formulario.php" method="post">
    <h1> Cadastramento do produto </h1>
    Código:      <input type="text" name = "codigo"> <br>
    Nome:        <input type="text" name = "nome" ><br>
    Quantidade:  <input type="number" name = "quantidade"> <br>
    Unidade:     <input type="text" name = "unidade"> <br>
    Preço:       <input type="number" name = "preco"> <br>
    <input type="submit" value="Enviar" name = "Enviar">
    <input type="reset"  value="Limpar" name = "Limpar">
  
   <?php
 if(isset($_POST["Enviar"])){
    $codigo = $_POST["codigo"];
    $nome = $_POST["nome"];
    $quantidade = $_POST["quantidade"];
    $unidade = $_POST["unidade"];
    $preco = $_POST["preco"];

    If($codigo === "" || $nome === "" || $quantidade === "" || $unidade === "" || $preco === ""){
            echo "<h3> Houve um erro no cadastro, por favor faças as devidas alterações para o correto cadastramento do produto</h3>";
            if($codigo === "")
            Echo "Verifique o <b><u>código</u></b> do produto<br>";
            if($nome === "")
            Echo "Verifique o <b><u>nome</u></b> do produto<br>";
            if($quantidade === "")
            Echo "Verifique a <b><u>quantidade</u></b> de produtos<br>";
            if($unidade === "")
            Echo "Verifique a <b><u>undiade</u></b> do produto<br>";
            if($preco === "")
            Echo "Verifique o <b><u>preço</u></b> do produto";
    } else{
        echo "<h1> Produto cadastrado com sucesso </h1>";
        echo "<h3> Dados do produto cadastrado</h3>";
        echo "Código do produto: $codigo <br>";
        echo "Nome do produto: $nome <br>";
        echo "Quantidade cadastrada: $quantidade <br>";
        echo "Unidade: $unidade <br>";
        echo "Preço do produto: ", number_format($preco,2);
    }
 }
    ?>
</body>
</html>