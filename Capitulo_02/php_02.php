<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP5 - Tipo Ponto Flutuante</title>
  </head>
  <body>
    <?php
      $n1 = 12.705;
      $n2 = 1.23e10;
      $n3 = 2E-12;
      echo "<pre>$n1 <br />$n2 <br />$n3</pre>";
    ?>

    <hr />
    <p><?=(int) ((0.1 + 0.7) * 10)?></p>
    <p><?=(int) ((0.1 + 0.7) * 100)?></p>
    <p><?=(int) ((0.1 + 0.4) * 10)?></p>
  </body>
</html>
