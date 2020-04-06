<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <h1> Tipo de Dados Integer </h1>

    <?php
      $a = 10;
      $b = "USCS";
      $c = TRUE;
      $d = 5.1;


      printf('<br>$a é do tipo %s', gettype($a));
      printf('<br>$b é do tipo %s', gettype ($b));
      printf('<br>$c é do tipo %s', gettype ($c));
      printf('<br>$d é do tipo %s', gettype ($d));

      printf('<br><br><hr>');

      if (is_integer($a))
      printf ('<br>$a é inteiro!');

      if (is_string($b))
      printf ('<br><br>$b é Texto!');

      if (is_bool($c))
      printf ('<br><br>$a é booleano!');

      if (is_float($d))
      printf ('<br><br>$a é float!');
    ?>

  </body>
</html>
