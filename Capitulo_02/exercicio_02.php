<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercício 2 - Média de um Estudante de computação</title>
  </head>
  <body>
    <?php
      $Nota1 = 5.0;
      $Nota2 = 7.1;
      $Media = (($Nota1*3.5)+($Nota2*7.5)/11);
      printf('A média do aluno é: '. number_format($Media,5));
     ?>
  </body>
</html>
