<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<meta http-equiv="Coment-Type" content="text/html; charset=utf-8" />
    <p>Escolha um curso</p>

        <form name="informacoes" method="POST" action="curso.php">
        <select name="curso">
            <option value="ADS" selected>
                Tecnologia em Análise e Desenvolvimento de Sistemas
            </option>
            <option value="Automação">
                Tecnologia em Automação Industrial
            </option>
            <option value="Matemática">
                Licenciatura em Matemática
            </option>
            <option value="TMSI">
                Técnico em Manutenção e Suporte de Informática
            </option>
            <option value="TAI">
                Técnico em Automação Industrial
            </option>
        </select> </p>
        <input name="enviar" type="submit" value="Enviar">
    </form>
</body>
</html>