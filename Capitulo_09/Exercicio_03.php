<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $alunos = array(
        "Aluno_00" => array("Nome: " => "Ana Clara Fernades",
                            "Cidade:" => "São Paulo",
                            "P1" => number_format(7.0,1),
                            "P2" => number_format(5.0,1) 
                            ),
        "Aluno_01" => array("Nome: " => "Bruno Silva Junior",
                            "Cidade:" => "Santo André",
                            "P1" => number_format(4.0,1),
                            "P2" => number_format(5.0,1)
                            ),
        "Aluno_02" => array("Nome: " => "Claudio Dias",
                            "Cidade:" => "São Paulo",
                            "P1" => number_format(8.0,1),
                            "P2" => number_format(4.0,1)
                            ),
        "Aluno_03" => array("Nome: " => "Diana Souza Melo",
                            "Cidade:" => "São Caetano",
                            "P1" => number_format(6.0,1),
                            "P2" => number_format(5.0,1)
                            )
                        );

        echo "<pre>";
        print_r($alunos);
        echo "</pre>";


    ?>




</body>
</html>