<!DOCTYPE html>
<html>
  <head>
    <title>A_30</title>
  </head>
  <body>
    <?php
      for ($i=0; $i < 4; $i++) {
        echo 'Zeile ' . $i . '<br />';
      }
      $array = ["Peter" ,  "Paul" ,  "Pascal" ,  "Fred" ];
      echo '<br />';
      foreach ($array as $key => $value) {
        echo $value . '<br />';
      }
    ?>
  </body>
</html>
