<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP5 - String : Aspas Simples</title>
  </head>
  <body>
    <?php
      $s1 = "PHP5 - Guia do Programador";
      $s2 = "Título: \"PHP5 - Guia do Programador\"";
      $s3 = "Barra invertida (\\), \$";
      $val = "A variável '\$s1 = $s1' será expandida";
      echo $s1;
      echo '<br />' . $s2;
      echo '<br />' . $s3;
      echo '<br />' . $val;
    ?>
  </body>
</html>
